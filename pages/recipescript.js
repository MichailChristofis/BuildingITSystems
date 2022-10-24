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
let message = document.querySelector("#mes"),
  meschar = document.querySelector(".meschar");
message.addEventListener("input", () => {
  let mescount = message.value.length;
  meschar.innerText = mescount + "/256";
});
