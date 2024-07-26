export function openApp() {
    var chromeWindow = document.getElementById('app-chrome');
    var notesWindow = document.getElementById('app-notes');
    var codeWindow = document.getElementById('app-code');
    var videoWindow = document.getElementById('app-video');
    var photoshopWindow = document.getElementById('app-photoshop');
    
    window.chromeApp = function() {
        chromeWindow.style.display = "block";
        setTimeout(() => {
            chromeWindow.classList.add("fadein");
        }, 0);
    };

    window.photoshopApp = function() {
        photoshopWindow.style.display = "block";
        setTimeout(() => {
            photoshopWindow.classList.add("fadein");
        }, 0);
    };

    window.notesApp = function() {
        notesWindow.style.display = "block";
        setTimeout(() => {
            notesWindow.classList.add("fadein");
        }, 0);
    };

    window.codeApp = function() {
        codeWindow.style.display = "block";
        setTimeout(() => {
            codeWindow.classList.add("fadein");
        }, 0);
    };

    window.videoApp = function() {
        videoWindow.style.display = "block";
        setTimeout(() => {
            videoWindow.classList.add("fadein");
        }, 0);
    };

    window.closeWindows = function() {
        chromeWindow.style.display = "none";
        photoshopWindow.style.display = "none";
        notesWindow.style.display = "none";
        codeWindow.style.display = "none";
        videoWindow.style.display = "none";
    
        chromeWindow.classList.remove("fadein");
        photoshopWindow.classList.remove("fadein");
        notesWindow.classList.remove("fadein");
        codeWindow.classList.remove("fadein");
        videoWindow.classList.remove("fadein");
    };
}