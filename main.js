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

var chromeWindow = document.getElementById('app-chrome')
var notesWindow = document.getElementById('app-notes')
var codeWindow = document.getElementById('app-code')
var videoWindow = document.getElementById('app-video')
var photoshopWindow = document.getElementById('app-photoshop')

function chromeApp() {
    chromeWindow.style.display = "block"
    setTimeout(() => {
        chromeWindow.classList.add("fadein")
    }, 0);
}
function photoshopApp() {
    photoshopWindow.style.display = "block"
    setTimeout(() => {
        photoshopWindow.classList.add("fadein")
    }, 0);
}
function notesApp() {
    notesWindow.style.display = "block"
    setTimeout(() => {
        notesWindow.classList.add("fadein")
    }, 0);
}
function codeApp() {
    codeWindow.style.display = "block"
    setTimeout(() => {
        codeWindow.classList.add("fadein")
    }, 0);
}
function videoApp() {
    videoWindow.style.display = "block"
    setTimeout(() => {
        videoWindow.classList.add("fadein")
    }, 0);
}
function closeWindows() {
    chromeWindow.style.display = "none"
    photoshopWindow.style.display = "none"
    notesWindow.style.display = "none"
    codeWindow.style.display = "none"
    videoWindow.style.display = "none"

    chromeWindow.classList.remove("fadein")
    photoshopWindow.classList.remove("fadein")
    notesWindow.classList.remove("fadein")
    codeWindow.classList.remove("fadein")
    videoWindow.classList.remove("fadein")
}

document.addEventListener('DOMContentLoaded', (event) => {
    startClock();
});