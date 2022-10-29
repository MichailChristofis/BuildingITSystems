document.querySelector(".b1").addEventListener("click", () => {
  document.querySelector(".b1").classList.add("pressed");
  document.querySelector(".b2").classList.remove("pressed");
  document.querySelector(".b3").classList.remove("pressed");
  document.querySelector(".b4").classList.remove("pressed");
  document.querySelector(".spanish").classList.remove("goaway");
  document.querySelector(".french").classList.add("goaway");
  document.querySelector(".english").classList.add("goaway");
  document.querySelector(".australian").classList.add("goaway");
});
document.querySelector(".b2").addEventListener("click", () => {
  document.querySelector(".b1").classList.remove("pressed");
  document.querySelector(".b2").classList.add("pressed");
  document.querySelector(".b3").classList.remove("pressed");
  document.querySelector(".b4").classList.remove("pressed");
  document.querySelector(".spanish").classList.add("goaway");
  document.querySelector(".french").classList.remove("goaway");
  document.querySelector(".english").classList.add("goaway");
  document.querySelector(".australian").classList.add("goaway");
});
document.querySelector(".b3").addEventListener("click", () => {
  document.querySelector(".b1").classList.remove("pressed");
  document.querySelector(".b2").classList.remove("pressed");
  document.querySelector(".b3").classList.add("pressed");
  document.querySelector(".b4").classList.remove("pressed");
  document.querySelector(".spanish").classList.add("goaway");
  document.querySelector(".french").classList.add("goaway");
  document.querySelector(".english").classList.remove("goaway");
  document.querySelector(".australian").classList.add("goaway");
});
document.querySelector(".b4").addEventListener("click", () => {
  document.querySelector(".b1").classList.remove("pressed");
  document.querySelector(".b2").classList.remove("pressed");
  document.querySelector(".b3").classList.remove("pressed");
  document.querySelector(".b4").classList.add("pressed");
  document.querySelector(".spanish").classList.add("goaway");
  document.querySelector(".french").classList.add("goaway");
  document.querySelector(".english").classList.add("goaway");
  document.querySelector(".australian").classList.remove("goaway");
});
