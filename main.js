const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("open");

    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", () => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-line");
})

const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
};

ScrollReveal().reveal(".header__container p", {
    ...scrollRevealOption,
});

ScrollReveal().reveal(".header__container h1", {
    ...scrollRevealOption,
    delay: 500,
});

// about container
ScrollReveal().reveal(".about__image img", {
    ...scrollRevealOption,
    origin: "left",
});

ScrollReveal().reveal(".about__content .section__subheader", {
    ...scrollRevealOption,
    delay: 500,
});

ScrollReveal().reveal(".about__content .section__header", {
    ...scrollRevealOption,
    delay: 1000,
});

ScrollReveal().reveal(".about__content .section__description", {
    ...scrollRevealOption,
    delay: 1500,
});

ScrollReveal().reveal(".about__btn", {
    ...scrollRevealOption,
    delay: 2000,
});

// room container
ScrollReveal().reveal(".room__card", {
    ...scrollRevealOption,
    interval: 500,
});

// service container
ScrollReveal().reveal(".service__list li", {
    ...scrollRevealOption,
    interval: 500,
    origin: "right",
});

const body = document.querySelector('body');
var buttons = document.querySelectorAll('.btn');
const popupContainer = document.querySelector('.popup-container');
// const closeBtn = document.querySelector('.close-btn');

// open modal when you click the book now button
for (i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
        body.classList.add('modal-open');
        popupContainer.classList.add('active');
    });
}

var popupDialog = document.querySelector('.popup-dialog');

popupContainer.addEventListener("click", function(e) {
    if(e.target == popupContainer)
    {
        body.classList.remove('modal-open');
        popupContainer.classList.remove('active');
    }
});

function sortCitySelect() {
    var lb = document.getElementById('cityselect');
    arrTexts = new Array();
    
    for(i=0; i<lb.length; i++)  {
      arrTexts[i] = lb.options[i].text;
    }
    
    arrTexts.sort();
    
    for(i=0; i<lb.length; i++)  {
      lb.options[i].text = arrTexts[i];
      lb.options[i].value = arrTexts[i];
    }
}

window.addEventListener("load", function(){
    var lb = document.getElementById('cityselect');
    arrTexts = new Array();
    for(i=0; i<lb.length-1; i++)  {
      arrTexts[i] = lb.options[i+1].text;
    }
    
    arrTexts.sort();
    
    for(i=1; i<lb.length; i++)  {
      lb.options[i].text = arrTexts[i-1];
      lb.options[i].value = arrTexts[i-1];
    }
    
}, false);




