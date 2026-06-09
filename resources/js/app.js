// Import our custom CSS
import '../sass/app.scss'

// Import all of Bootstrap’s JS
import * as bootstrap from 'bootstrap'


function getTheme() {
    return (
        localStorage.getItem("theme") ||
        (window.matchMedia("(prefers-color-scheme:dark").matches
            ? "dark"
            : " light")
    );
}
document.getElementById("themeToggle").addEventListener("click", () => {
    const currentTheme = getTheme();
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    document.documentElement.setAttribute("data-bs-theme", newTheme);
    localStorage.setItem("theme", newTheme);
});
document.documentElement.setAttribute("data-bs-theme", getTheme());
