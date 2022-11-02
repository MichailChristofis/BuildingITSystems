$("#sendemail").submit((e) => {
  e.preventDefault();
  let email = $("#email").val();
  let subject = $("#subject").val();
  let message = $("#mes").val();
  $.ajax({
    type: "POST",
    url: "sendemail.php",
    data: { email: email, subject: subject, message: message },
  }).done(function (response) {
    console.log(response);
  });
});
$(".nutdiv a img").click((e) => {
  e.preventDefault();
  let parent = e.target.closest("a");
  let link = parent.getAttribute("href");
  let img = e.target;
  console.log(link);
  $.ajax({
    type: "GET",
    url: link,
    data: { data: "" },
    dataType: "json",
  }).done(function (response) {
    console.log(response);
    if (response.resp === 1) {
      if (response.action === "add") img.src = "./../assets/fullheart.svg";
      else img.src = "./../assets/heart.png";
    }
  });
});
$(".nut a img").click((e) => {
  e.preventDefault();
  let parent = e.target.closest("a");
  let link = parent.getAttribute("href");
  let img = e.target;
  console.log(link);
  $.ajax({
    type: "GET",
    url: link,
    data: { data: "" },
    dataType: "json",
  }).done(function (response) {
    console.log(response);
    if (response.resp === 1) {
      if (response.action === "add") img.src = "./../assets/whitelikefull.svg";
      else img.src = "./../assets/whitelike.svg";
    }
  });
});
document.querySelector("#mes").addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    e.preventDefault();
    document.querySelector(".numdiv button").click();
  }
});
$("#getcomments").click(() => {
  $("#ratingform").toggleClass("active");
});
let stars = document.querySelectorAll(".ratings button");
stars.forEach((s, i) => {
  s.addEventListener("mouseover", () => {
    let numbers = i;
    for (let i = 0; i <= numbers; i++) {
      console.log(numbers);
      let img = stars[i].querySelector("img");
      img.src = "./../assets/star-solid.png";
    }
  });
  s.addEventListener("mouseleave", () => {
    stars.forEach((e) => {
      if (e.classList.contains("solid")) {
      } else e.querySelector("img").src = "./../assets/star-regular.png";
    });
  });
  s.addEventListener("click", () => {
    let numbers = i;
    stars.forEach((e) => e.classList.remove("solid"));
    for (let i = 0; i < 5; i++) {
      let img = stars[i].querySelector("img");
      img.src = "./../assets/star-regular.png";
    }
    for (let i = 0; i <= numbers; i++) {
      let img = stars[i].querySelector("img");
      img.src = "./../assets/star-solid.png";
      stars[i].classList.add("solid");
      $("#rating").val(i + 1);
    }
  });
});
document.querySelector(".sub").addEventListener("click", (e) => {
  e.preventDefault();
  let rating = document.querySelector("#rating").value;
  let message = document.querySelector("#comment").value;
  let recid = document.querySelector("#id").value;
  let today = new Date().toISOString().slice(0, 10);
  $.ajax({
    type: "POST",
    url: "addcomment.php",
    data: { message: message, rating: rating, recid: recid, date: today },
  }).done(function (response) {
    console.log(response);
  });
  document.querySelector("#getcomments").click();
});
$(document).ajaxSuccess(function () {
  window.location.reload();
});
