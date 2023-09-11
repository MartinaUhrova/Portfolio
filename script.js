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
