let parade_1 = document.querySelector('.parade-1');
let parade_2 = document.querySelector('.parade-2');

let images = [];

for (let i = 0; i < 14; i++) {
  images.push(`url(../../images/photos/numeriquelles${i}.jpg)`);
}

let image = 'url(../../images/photos/numeriquelles3.jpg)';

const interval = setInterval(function() {
  parade_1.style.backgroundImage = images[Math.floor(Math.random() * Math.floor(images.length) + 1)];
}, 8000);

const interval_2 = setInterval(function() {
  parade_2.style.backgroundImage = images[Math.floor(Math.random() * Math.floor(images.length) + 1)];
}, 10000);