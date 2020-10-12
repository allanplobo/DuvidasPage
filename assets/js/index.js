// SHOWS MOBILE MENU

function showMenu() {
    let menuMobile = document.getElementById('menuMobile');
    menuMobile.classList.toggle('menu-mobile-opened');
}

// ACCORDION SCRIPT

var acc = document.getElementsByClassName("second-section__accordion");
var arrow = document.getElementsByClassName('second-section__accordion__arrow');
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.children.item(1).classList.toggle('opened-panel-arrow')
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + 50 + "px";
        }
    });
}