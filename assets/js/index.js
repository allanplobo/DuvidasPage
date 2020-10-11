// SHOWS MOBILE MENU

function showMenu() {
    let menuMobile = document.getElementById('menuMobile');
    menuMobile.classList.toggle('menu-mobile-opened');
}

// ACCORDION SCRIPT

var acc = document.getElementsByClassName("second-section__accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}