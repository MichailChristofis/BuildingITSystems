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
