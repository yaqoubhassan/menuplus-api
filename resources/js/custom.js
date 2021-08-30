window.openNav = function() {
    const mySidenav = document.getElementById('mySidenav');
    if (mySidenav) {
        document.getElementById('mySidenav').style.width = '280px';
    }
};

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
window.closeNav = function() {
    const mySidenav = document.getElementById('mySidenav');
    if (mySidenav) {
        document.getElementById('mySidenav').style.width = '0';
    }
};

openNav();


$(document).ready(() => {
    $(".mobile-menu-button").click(() => {
        $('.sidebar').toggleClass('-translate-x-full');
    });
    var myUploader = new SlashUploader (document.getElementById("my-uploader"), {
        dropFilesText: 'Drop Files'
    });
})