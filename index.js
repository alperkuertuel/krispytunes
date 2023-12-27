/* -- global variables -- */
const tabletWidth = 768;
const desktopWidth = 1023;
const mainLocation =
  document.location.pathname === "/" ||
  document.location.pathname === "/index" ||
  document.location.pathname === "/de";

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

  /* -- license-terms functionality -- */
  const licenseButtons = document.querySelectorAll(
    '[data-js="license-button"]'
  );
  const licenseTables = document.querySelectorAll('[data-js="license-table"]');

  licenseButtons.forEach((button, index) =>
    button.addEventListener("click", () => {
      const table = licenseTables[index];
      if (window.screen.width > tabletWidth) {
        table.style.display = table.style.display === "none" ? "block" : "none";
      } else
        table.style.display =
          table.style.display === "block" ? "none" : "block";
    })
  );

  /* -- nav-bar functionality -- */
  const navigationBar = document.querySelector('[data-js="navigation-bar"]');
  const menueBars = document.querySelector('[data-js="menue-bar"]');

  window.addEventListener("resize", () => {
    navigationBar.style.display =
      window.screen.width <= desktopWidth ? "none" : "flex";
  });
  window.dispatchEvent(new Event("resize"));

  /* -- nav-bar set-cross the menue-bar and display nav-list -- */
  menueBars.addEventListener("click", () => {
    menueBars.classList.toggle("set-cross");
    navigationBar.style.display =
      navigationBar.style.display === "none" ? "block" : "none";
  });

  document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (event) {
      event.preventDefault();

      if (window.innerWidth <= desktopWidth) {
        navigationBar.style.display = "none";
        menueBars.classList.remove("set-cross");
      }

      const targetElement = document.querySelector(this.getAttribute("href"));

      if (targetElement) {
        const offsetPosition =
          targetElement.offsetTop -
          (window.screen.width <= tabletWidth ? 30 : 50);
        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
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

    const formData = new FormData(freebeatsForm);

    fetch(
      location.pathname === "/" || location.pathname === "/index"
        ? "./components/freebeats/freebeats-req-endpoint.php"
        : "./components/freebeats/freebeats-req-endpoint-de.php",
      {
        method: "POST",
        body: formData,
      }
    )
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

    fetch(
      location.pathname === "/" || location.pathname === "/index"
        ? "./components/contact/contact-form-endpoint.php"
        : "./components/contact/contact-form-endpoint-de.php",
      {
        method: "POST",
        body: contactFormData,
      }
    )
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
