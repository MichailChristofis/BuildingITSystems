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
document.querySelector("#mes").addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    e.preventDefault();
    document.querySelector(".numdiv button").click();
  }
});
