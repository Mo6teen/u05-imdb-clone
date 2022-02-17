Variabler;

let logo = document.querySelector("#menu");

logo.addEventListener("click", menu);

function menu() {}

// START DarkModeJS
const body = document.querySelector("body");

// Dark Mode Action
let darkMode = localStorage.getItem("darkMode");
const darkModeToggle = document.querySelector(".dark-mode-button");

// Enable Dark Mode
const enableDarkMode = () => {
    body.classList.add("dark-mode");
    localStorage.setItem("darkMode", "enabled");
};

// Disable Dark Mode
const disableDarkMode = () => {
    body.classList.remove("dark-mode");
    localStorage.setItem("darkMode", null);
};

if (darkMode == "enabled") {
    enableDarkMode();
}

// Desktop Button
darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");
    if (darkMode !== "enabled") {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
});
// END DarkModeJS

// START SideNavJS
const parentMenuItems = document.querySelectorAll(".top-nav .parent-item");
const submenusList = document.querySelectorAll(".parent-item .submenu");

parentMenuItems.forEach((parentMenu) => {
    parentMenu.addEventListener("click", toggleSubmenu);
});

function toggleSubmenu() {
    let submenu = this.getElementsByClassName("submenu")[0];
    this.classList.toggle("active");
    submenu.classList.toggle("active");
}
// END SideNavJS
