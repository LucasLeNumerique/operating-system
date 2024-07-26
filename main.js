import { openApp } from "./assets/scripts/openWindow.js";
import { startClock } from "./assets/scripts/datetime.js";

console.log("Hi, I'm Lucas");

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(function() {
        var loader = document.getElementById("loader")
        loader.classList.add("fadeout")
        loader.addEventListener("transitionend", function() {
            loader.remove()
        })
    }, 5000)
})
document.addEventListener('DOMContentLoaded', (event) => {
    startClock();
    openApp();
});