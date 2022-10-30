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

message.addEventListener("input", () => {
  let mescount = message.value.length;
  meschar.innerText = mescount + "/256";
});
