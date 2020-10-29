let parade_1 = document.querySelector('.parade-1');
let parade_2 = document.querySelector('.parade-2');

let linkBtnMore_1 = document.querySelector('.parade-1 a');
let linkBtnMore_2 = document.querySelector('.parade-2 a');

let images = [];

for (let i = 0; i < 14; i++) {
  images.push(`../../images/photos/numeriquelles${i}.jpg`);
}

const interval = setInterval(function() {
  let nb = Math.floor(Math.random() * Math.floor(images.length) + 1);
  linkBtnMore_1.href = images[nb];
  parade_1.style.backgroundImage = `url(${images[nb]})`;
}, 8000);

const interval_2 = setInterval(function() {
  let nb = Math.floor(Math.random() * Math.floor(images.length) + 1);
  linkBtnMore_2.href = images[nb];
  parade_2.style.backgroundImage = `url(${images[nb]})`;
}, 10000);
