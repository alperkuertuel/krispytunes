/* -- global variables -- */
const phoneWidth = 320;
const tabletWidth = 768;
const desktopWidth = 1028;

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

/* -- menue-bars toggle functionality -- */
function toggleMenueBars(event) {
  event.classList.toggle("toggle");
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
