let _s = (e) => document.querySelector(e);
let slides = document.querySelectorAll(".slide").length;
let hi = 0;
let popsearch = document.querySelector(".popsearch"),
  search = document.querySelector(".in"),
  foodsection = document.querySelector(".foodsection");
let message = document.querySelector("#mes"),
  meschar = document.querySelector(".meschar");
let profile = document.querySelector(".toggleprof");
window.addEventListener("click", (e) => {
  let box = document.querySelector(".toggleprof");
  let fi = document.querySelector(".profile-box");
  if (e.target == box) {
    fi.classList.remove("profempty");
    fi.classList.add("profshow");
  } else {
    fi.classList.add("profempty");
    fi.classList.remove("profshow");
  }
});

popsearch.addEventListener("click", (e) => {
  if (e.target.nodeName === "BUTTON") {
    search.value = e.target.innerText;
  }
});
_s(".prev").addEventListener("click", () => {
  if (hi >= 0) hi = -100 * slides;
  hi += 100;
  _s(".slides").style.transform = `translate3D(${hi}%, 0, 0)`;
});
_s(".next").addEventListener("click", () => {
  if (hi <= -100 * (slides - 1)) hi = 100;
  hi -= 100;
  _s(".slides").style.transform = `translate3D(${hi}%, 0, 0)`;
});
_s(".downarr").addEventListener("click", () => {
  console.log(hiS, -100 * slides);
  if (hiS <= -100 * (slides - 1)) hiS = 100;
  hiS -= 100;
  phoneS ? (_s(".slides").style.transform = `translate3D(0, ${hiS}%, 0)`) : null;
});
document.querySelector(".slideinner").addEventListener("click", (e) => {
  if (e.target.classList.contains("full") && e.target.nodeName === "IMG") {
    e.target.src = "./../assets/heart.png";
    e.target.classList.toggle("empty");
    e.target.classList.toggle("full");
  } else if (e.target.nodeName === "IMG" && e.target.classList.contains("empty")) {
    e.target.src = "./../assets/fullheart.svg";
    e.target.classList.toggle("empty");
    e.target.classList.toggle("full");
  }
});
