const licenseButtons = document.querySelectorAll('[data-js="license-button"]');
const licenseTables = document.querySelectorAll('[data-js="license-table"]');

const phoneWidth = 320;
const tabletWidth = 768;
const desktopWidth = 1028;

licenseButtons.forEach((button, index) =>
  button.addEventListener("click", () => {
    const table = licenseTables[index];
    if (window.screen.width > tabletWidth) {
      table.style.display = table.style.display === "none" ? "block" : "none";
    } else
      table.style.display = table.style.display === "block" ? "none" : "block";
  })
);
