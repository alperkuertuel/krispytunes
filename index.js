/* -- global variables -- */
const tabletWidth = 768;
const desktopWidth = 1023;
const mainLocation =
  document.location.pathname === "/" ||
  document.location.pathname === "/index" ||
  document.location.pathname === "/de" ||
  document.location.pathname === "/index.php" ||
  document.location.pathname === "/de.php";

// all event listeners will be active when in main location
if (mainLocation) {
  /* -- cookie functionality -- */
  const cookieContainer = document.querySelector(
    '[data-js="cookie-container"]'
  );
  const cookieButton = document.querySelector('[data-js="cookie-button"]');
  const cookiesAreAccepted = localStorage.getItem("cookiesAreAccepted");

  cookieButton.addEventListener("click", () => {
    cookieContainer.style.display = "none";
    localStorage.setItem("cookiesAreAccepted", true);
  });

  if (!cookiesAreAccepted) {
    cookieContainer.style.display = "flex";
  }

  /* -- nav-bar functionality -- */
  const navigationBar = document.querySelector('[data-js="navigation-bar"]');
  const menueBars = document.querySelector('[data-js="menue-bar"]');

  function updateNavigationBarVisibilty() {
    navigationBar.style.display =
      window.innerWidth <= tabletWidth ? "none" : "flex";
  }

  updateNavigationBarVisibilty();

  window.addEventListener("resize", updateNavigationBarVisibilty);

  /* -- nav-bar set-cross the menue-bar and display nav-list -- */
  menueBars.addEventListener("click", () => {
    menueBars.classList.toggle("set-cross");
    navigationBar.style.display =
      navigationBar.style.display === "none" ? "block" : "none";
  });

  document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (event) {
      event.preventDefault();

      if (window.innerWidth <= tabletWidth) {
        navigationBar.style.display = "none";
        menueBars.classList.remove("set-cross");
      }

      const targetElement = document.querySelector(this.getAttribute("href"));

      if (targetElement) {
        const offsetPosition =
          targetElement.offsetTop -
          (window.innerWidth <= tabletWidth ? 30 : 50);
        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  });

  const licenseButtons = document.querySelectorAll(
    '[data-js="license-button"]'
  );
  const licenseTables = document.querySelectorAll('[data-js="license-table"]');
  const downArrows = document.querySelectorAll(".fa-angle-down");

  function toggleLicenseTable(index) {
    const button = licenseButtons[index];
    const arrow = downArrows[index];
    const table = licenseTables[index];

    table.style.display = window.innerWidth <= tabletWidth ? "none" : "block";
    arrow.classList.toggle("fa-angle-down", window.innerWidth <= tabletWidth);

    button.addEventListener("click", () => {
      table.style.display = table.style.display === "none" ? "block" : "none";
      arrow.classList.toggle("fa-angle-down");
    });
  }

  licenseButtons.forEach((button, index) => {
    toggleLicenseTable(index);
  });

  window.addEventListener("resize", () => {
    licenseButtons.forEach((_, index) => {
      toggleLicenseTable(index);
    });
  });

  /* -- request freebeats functionality -- */
  const freebeatsForm = document.querySelector(
    '[data-js="freebeats-request-form"]'
  );
  const freebeatsResponseMessage = document.querySelector(
    '[data-js="freebeats-response-message"]'
  );
  const freebeatsFormContainer = document.querySelector(
    '[data-js="freebeats-form-container"]'
  );

  freebeatsForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const freebeatsFormData = new FormData(freebeatsForm);
    freebeatsFormData.append("currentPathname", document.location.pathname);

    fetch("./endpoints/freebeats-req-endpoint.php", {
      method: "POST",
      body: freebeatsFormData,
    })
      .then((response) => response.json())
      .then((data) => {
        // console.log(data);
        freebeatsForm.reset();
        freebeatsResponseMessage.innerHTML = data;
        freebeatsFormContainer.style.display = "none";
      })
      .catch((error) => console.error("Error:", error));
  });

  /* -- contact request functionality -- */
  const contactForm = document.querySelector('[data-js="contact-form"]');
  const contactResponseMessage = document.querySelector(
    '[data-js="contact-response-message"]'
  );
  const contactFormContainer = document.querySelector(
    '[data-js="contact-form-container"]'
  );

  contactForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const contactFormData = new FormData(contactForm);
    contactFormData.append("currentPathname", document.location.pathname);

    fetch("./endpoints/contact-form-endpoint.php", {
      method: "POST",
      body: contactFormData,
    })
      .then((response) => response.json())
      .then((data) => {
        // console.log(data);
        contactForm.reset();
        contactResponseMessage.innerHTML = data;
        contactFormContainer.style.display = "none";
      })
      .catch((error) => console.error("Error:", error));
  });
}
