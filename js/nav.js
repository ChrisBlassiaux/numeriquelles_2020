let navbar = document.querySelector('.navbar');
let burger = document.querySelector('.contain-burger');
let nav = document.querySelector('.nav');

let dropDownEvents = document.querySelector('.events-cities');
let eventsTitle = document.querySelector('.section-title-events');
let dropDownStages = document.querySelector('.stages');

console.log(dropDownEvents)

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