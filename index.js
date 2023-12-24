/* -- global variables -- */
const tabletWidth = 768;
const desktopWidth = 1023;

/* -- cookie functionality -- */
const cookieContainer = document.querySelector('[data-js="cookie-container"]');
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
const licenseButtons = document.querySelectorAll('[data-js="license-button"]');
const licenseTables = document.querySelectorAll('[data-js="license-table"]');

licenseButtons.forEach((button, index) =>
  button.addEventListener("click", () => {
    const table = licenseTables[index];
    if (window.screen.width > tabletWidth) {
      table.style.display = table.style.display === "none" ? "block" : "none";
    } else
      table.style.display = table.style.display === "block" ? "none" : "block";
  })
);

/* -- nav-bar functionality -- */
const navigationBar = document.querySelector('[data-js="navigation-bar"]');
const menueBar = document.querySelector('[data-js="menue-bar"]');

window.addEventListener("resize", () => {
  navigationBar.style.display =
    window.screen.width <= desktopWidth ? "none" : "flex";
});
window.dispatchEvent(new Event("resize"));

/* nav-bar set-cross menue-bar and display nav-list*/
menueBar.addEventListener("click", () => {
  menueBar.classList.toggle("set-cross");
  navigationBar.style.display =
    navigationBar.style.display === "none" ? "block" : "none";
});

document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (event) {
    event.preventDefault();

    if (window.innerWidth <= desktopWidth) {
      navigationBar.style.display = "none";
      menueBar.classList.remove("set-cross");
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
