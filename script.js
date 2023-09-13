//Inicializace tooltipu
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

//Animace v sekci Dovednosti
function addSvgAnimation(id) {
  document
    .querySelector(`#svg-row${id} .svg-rectangle`)
    .classList.add("svg-animation-rectangle");
  document
    .querySelector(`#svg-row${id} .svg-triangle`)
    .classList.add("svg-animation-triangle");
  document
    .querySelector(`#svg-row${id} h3`)
    .classList.add("svg-animation-text");

  const pocetIkon = document
    .getElementById(`svg-row${id}`)
    .getElementsByClassName("svg-icon-div").length;
  for (i = 0; i < pocetIkon; i++) {
    const element = document.querySelector(
      `#svg-row${id} div:nth-of-type(${i + 2})`
    );
    element.classList.add("visible");
    element.style.transitionDelay = `${(i + 1) / 5}s`;
  }
}

function removeSvgAnimation(id) {
  document
    .querySelector(`#svg-row${id} .svg-rectangle`)
    .classList.remove("svg-animation-rectangle");
  document
    .querySelector(`#svg-row${id} .svg-triangle`)
    .classList.remove("svg-animation-triangle");
  document
    .querySelector(`#svg-row${id} h3`)
    .classList.remove("svg-animation-text");

  const pocetIkon = document
    .getElementById(`svg-row${id}`)
    .getElementsByClassName("svg-icon-div").length;
  for (i = 0; i < pocetIkon; i++) {
    const element = document.querySelector(
      `#svg-row${id} div:nth-of-type(${i + 2})`
    );
    element.classList.remove("visible");
    element.style.transitionDelay = `0s`;
  }
}

//Animace textu v nadpisu Zajmy
let counter = 0;
let timer;
const btnNext = document.querySelector(".carousel-control-next");
const btnPrev = document.querySelector(".carousel-control-prev");
const zajmyClass = document.querySelector("#zajmy-text-fade").classList;
btnNext.addEventListener("click", (event) => {
  if (event.detail === 1) {
    timer = setTimeout(() => {
      zajmyClass.remove(`text-fade${((counter % 4) + 4) % 4}`);
      zajmyClass.add(`text-fade${((++counter % 4) + 4) % 4}`);
    }, 200);
  }
});
btnNext.addEventListener("dblclick", (event) => {
  clearTimeout(timer);
  zajmyClass.remove(`text-fade${((counter % 4) + 4) % 4}`);
  zajmyClass.add(`text-fade${((++counter % 4) + 4) % 4}`);
});

btnPrev.addEventListener("click", (event) => {
  if (event.detail === 1) {
    timer = setTimeout(() => {
      zajmyClass.remove(`text-fade${((counter % 4) + 4) % 4}`);
      zajmyClass.add(`text-fade${((--counter % 4) + 4) % 4}`);
    }, 200);
  }
});
btnPrev.addEventListener("dblclick", (event) => {
  clearTimeout(timer);
  zajmyClass.remove(`text-fade${((counter % 4) + 4) % 4}`);
  zajmyClass.add(`text-fade${((--counter % 4) + 4) % 4}`);
});

//Zavirani hamburger menu
document.querySelector(".navbar-nav").addEventListener("click", () => {
  document.querySelector(".navbar-collapse").classList.remove("show");
});
