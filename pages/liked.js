let _s = (e) => document.querySelector(e);
let slides = document.querySelectorAll(".slide").length;
let hi = 0,
  hiS = 0;
let phoneS = screen.availWidth <= 1050 ? true : false;

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

message.addEventListener("input", () => {
  let mescount = message.value.length;
  meschar.innerText = mescount + "/256";
});

popsearch.addEventListener("click", (e) => {
  if (e.target.nodeName === "BUTTON") {
    search.value = e.target.innerText;
  }
});
function get_height() {
  let theight = document.querySelector(".slideinner > div:nth-child(1)").offsetHeight;
  const doc = document.documentElement;
  const tless = Math.floor(theight / 2);
  doc.style.setProperty(`--sl-height`, `calc(${theight * 2}px + 8.6vw)`);
}
window.addEventListener("resize", get_height);
get_height();
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
  slides = document.querySelectorAll(".slide").length;
  if (slides == 1) {
    let aslides = document.querySelectorAll(".foodimg").length;
    if (aslides <= 4) return;
  }
  let allSlides = Math.ceil(document.querySelectorAll(".foodimg").length / 4);
  if (hiS <= allSlides * -100) return;
  if (hiS <= -100 * slides) hiS = 100;
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
document.querySelector(".in").addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    console.log("HI");
    e.preventDefault();
    document.querySelector(".searchform").submit();
  }
});

document.querySelector(".magnifying").addEventListener("click", () => {
  document.querySelector(".searchform").submit();
});
document.querySelector("#mes").addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    e.preventDefault();
    document.querySelector(".numdiv button").click();
  }
});
