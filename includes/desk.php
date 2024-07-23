<div class="body-desk">
    <div class="body-app" ondblclick="chromeApp()">
        <img src="assets/images/chrome.png" alt="logo Chrome">
        <p>Chrome</p>
    </div>
    <div class="body-app">
        <img src="assets/images/photoshop.png" alt="logo Photoshop" ondblclick="photoshopApp()">
        <p>Photoshop</p>
    </div>
    <div class="body-app">
        <img src="assets/images/word.png" alt="logo Microsoft Word">
        <p>Microsoft Word</p>
    </div>
    <div class="body-app">
        <img src="assets/images/notes.png" alt="logo Notes" ondblclick="notesApp()">
        <p>Notes</p>
    </div>
    <div class="body-app">
        <img src="assets/images/video.png" alt="logo Video Player" ondblclick="videoApp()">
        <p>Video Player</p>
    </div>
    <div class="body-app">
        <img src="assets/images/trashbin.png" alt="logo Trash Bin">
        <p>Trash Bin</p>
    </div>

    <!-- Create chrome window -->
    <div id="app-chrome" class="body-window">
        <div class="body-app-container">
            <div class="body-app-top">
                <div class="body-app-name">
                    <h2>
                        Portfolio Lucas Schrever
                    </h2>
                </div>
                <div class="body-close" onclick="closeWindows()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">    
                        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/>
                    </svg>
                </div>
            </div>
            <iframe src="https://lucas-schrever.com/" 
                    name="lucas-schrever-portfolio" 
                    width="100%" 
                    height="100%"
                    style="border: none #000000;"></iframe>
        </div>
    </div>
    <!-- Create photoshop window -->
    <div id="app-photoshop" class="body-window">
        <div class="body-app-container">
            <div class="body-app-top">
                <div class="body-app-name">
                    <h2>
                        My Graphic Works
                    </h2>
                </div>
                <div class="body-close" onclick="closeWindows()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">    
                        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/>
                    </svg>
                </div>
            </div>
            <div class="body-app-content">
                Here are some of my graphic arts so far
            </div>
        </div>
    </div>
    <!-- Create notes window -->
    <div id="app-notes" class="body-window">
        <div class="body-app-container">
            <div class="body-app-top">
                <div class="body-app-name">
                    <h2>
                        Notes
                    </h2>
                </div>
                <div class="body-close" onclick="closeWindows()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">    
                        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/>
                    </svg>
                </div>
            </div>
            <div class="body-app-content">
                I want to learn new things
            </div>
        </div>
    </div>
    <!-- Create vs code window -->
    <div id="app-code" class="body-window">
        <div class="body-app-container">
            <div class="body-app-top">
                <div class="body-app-name">
                    <h2>
                        My Tech Skills
                    </h2>
                </div>
                <div class="body-close" onclick="closeWindows()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">    
                        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/>
                    </svg>
                </div>
            </div>
            <div class="body-app-content">
                <code>
                    <pre>
let WhoIAm = {
name: 'Lucas SCHREVER',
age: 'too lazy to update this parameter every year',
codingSkills: ['HTML', 'CSS', 'Javascript', 'PHP', 'VueJS', 'ReactJS', 'Wordpress']
creativeSkills: ['Adobe XD', 'Figma', 'Illustrator', 'Premiere Pro', 'Photoshop']
}
                    </pre>
                </code>
            </div>
        </div>
    </div>
    <!-- Create video player window -->
    <div id="app-video" class="body-window">
        <div class="body-app-container">
            <div class="body-app-top">
                <div class="body-app-name">
                    <h2>
                        Sorry Void - Ekylio on Youtube
                    </h2>
                </div>
                <div class="body-close" onclick="closeWindows()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">    
                        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/>
                    </svg>
                </div>
            </div>
            <video controls
                    width="1000"
                    height="auto">
                <source src="./assets/videos/sorry-void.mp4" type="video/mp4" />
                </video>
        </div>
    </div>
</div>