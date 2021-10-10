const carSld = document.getElementById("carrusel-slides");
const carSlds = document.querySelector("#carrusel-slides .slide");
const carRight = document.querySelector(".btn-next");
const carLeft = document.querySelector(".btn-prev");
let direction;

carRight.onclick = function () {
  carSld.scrollLeft += 120;  
};

carLeft.onclick = function () {
  carSld.scrollLeft -= 120;
};


