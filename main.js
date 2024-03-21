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

var firstApp = document.getElementById('static-app')
function staticApp() {
    // open static window
    firstApp.style.display = "block"
    setTimeout(() => {
        firstApp.classList.add("fadein")
    }, 0);
}
function closeWindows() {
    // close static window
    firstApp.style.display = "none"
    firstApp.classList.remove("fadein")
}
