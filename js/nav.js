let navbar = document.querySelector('.navbar');
let burger = document.querySelector('.contain-burger');
let nav = document.querySelector('.nav');

let products = document.querySelector('.nav .products');
let navProducts = document.querySelector('.nav-products');

window.addEventListener('resize', function () {
  if (window.innerWidth >= 1200) {
    nav.style.display = 'block';
  }

  if (window.innerWidth <= 1200) {
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

products.addEventListener('click', function () {
  if (navProducts.style.display == 'none') {
    navProducts.style.display = 'flex';
  } else {
    navProducts.style.display = 'none';
  }
})

