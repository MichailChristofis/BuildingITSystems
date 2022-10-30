alert("HI");
let popsearch = document.querySelector(".popsearch"),
  search = document.querySelector(".in"),
  foodsection = document.querySelector(".foodsection");
let message = document.querySelector("#mes"),
  meschar = document.querySelector(".meschar");
let profile = document.querySelector(".toggleprof");
alert("HI");
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

foodsection.addEventListener("click", (e) => {
  if (e.target.nodeName === "IMG" && e.target.classList.contains("full")) {
    e.target.src = "./../assets/heart.png";
    e.target.classList.toggle("empty");
    e.target.classList.toggle("full");
  } else if (e.target.nodeName === "IMG" && e.target.classList.contains("empty")) {
    e.target.src = "./../assets/fullheart.svg";
    e.target.classList.toggle("empty");
    e.target.classList.toggle("full");
  }
});

document.querySelector(".b1").addEventListener("click", () => {
  alert("HI");
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
