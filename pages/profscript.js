let no1 = document.querySelector(".no1"),
  no2 = document.querySelector(".no2"),
  no3 = document.querySelector(".no3"),
  nu1 = document.querySelector(".nu1"),
  nu2 = document.querySelector(".nu2"),
  nu3 = document.querySelector(".nu3"),
  no4 = document.querySelector(".myprofile"),
  easytransition = document.querySelector(".easytransition");

console.log("HI");
nu1.addEventListener("click", () => {
  no1.classList.remove("nodisplay");
  no4.classList.remove("nodisplay");
  no2.classList.add("nodisplay");
  no3.classList.add("nodisplay");
  easytransition.style.transform = "translateY(-0.1vw)";
  removeBold();
  nu1.classList.toggle("bold");
});
nu2.addEventListener("click", () => {
  no1.classList.add("nodisplay");
  no4.classList.add("nodisplay");
  no2.classList.remove("nodisplay");
  no3.classList.add("nodisplay");
  easytransition.style.transform = "translateY(3.7vw)";
  removeBold();
  nu2.classList.toggle("bold");
});
nu3.addEventListener("click", () => {
  no1.classList.add("nodisplay");
  no4.classList.add("nodisplay");
  no2.classList.add("nodisplay");
  no3.classList.remove("nodisplay");
  easytransition.style.transform = "translateY(7.5vw)";
  removeBold();
  nu3.classList.toggle("bold");
});
const removeBold = () => Array.from(document.querySelectorAll(".op")).forEach((a) => a.classList.remove("bold"));
