let _s = (e) => document.querySelector(e);
let slides = document.querySelectorAll(".slide").length;
let hi = 0;
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
querySelector(".foodimg").addEventListener("click", (e) => {
  alert("HI");
  if (e.target.classList.contains("full")) {
    e.target.src = "./../assets/heart.png";
    e.target.classList.toggle("empty");
    e.target.classList.toggle("full");
  } else {
    e.target.src = "./../assets/fullheart.svg";
    e.target.classList.toggle("empty");
    e.target.classList.toggle("full");
  }
});
