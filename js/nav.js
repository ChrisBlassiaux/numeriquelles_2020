let navbar = document.querySelector('.navbar');
let burger = document.querySelector('.contain-burger');
let nav = document.querySelector('.nav');

let dropDownEvents = document.querySelector('.events-cities');
let eventsTitle = document.querySelector('.section-title-events');
let dropDownStages = document.querySelector('.stages');

window.addEventListener('resize', function () {
  if (window.innerWidth >= 1200) {
    nav.style.display = 'block';
  } else if (window.innerWidth <= 1200) {
    nav.style.display = 'none';
  }
})

burger.addEventListener('click', function () {
  if (nav.style.display == 'none') {
    nav.style.display = 'block';
    navbar.classList.add('fixed');
  } else {
    nav.style.display = 'none';
    navbar.classList.remove('fixed');
  }
});

let navbarSections = document.querySelectorAll('.nav .section');

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    navbarSections.forEach(element => {
      element.style.padding = "20px 15px";
    });
    dropDownEvents.style.top = "65px";
    dropDownStages.style.top = "65px";
    navbar.style.borderBottom = "4px solid #DBEDF8";
  } else {
    navbarSections.forEach(element => {
      element.style.padding = "42px 15px";
    });
    dropDownEvents.style.top = "100px";
    dropDownStages.style.top = "100px";
    navbar.style.borderBottom = "none";
  }
}