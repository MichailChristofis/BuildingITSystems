let popsearch = document.querySelector(".popsearch"),
  search = document.querySelector(".in"),
  foodsection = document.querySelector(".foodsection");
let message = document.querySelector("#mes"),
  meschar = document.querySelector(".meschar");
popsearch.addEventListener("click", (e) => {
  if (e.target.nodeName === "BUTTON") {
    search.value = e.target.innerText;
  }
});

foodsection.addEventListener("click", (e) => {
  if (e.target.nodeName === "IMG" && e.target.classList.contains("full")) {
    e.target.src = "./../assets/heart.png";
  } else if (e.target.nodeName === "IMG" && e.target.classList.contains("empty")) {
    e.target.src = "./../assets/fullheart.svg";
  }
  e.target.classList.toggle("empty");
  e.target.classList.toggle("full");
});

message.addEventListener("input", () => {
  let mescount = message.value.length;
  meschar.innerText = mescount + "/256";
});
