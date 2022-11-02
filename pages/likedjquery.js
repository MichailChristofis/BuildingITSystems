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
$(".foodimg a img").click((e) => {
  if (e.target.classList.contains("like")) {
    e.preventDefault();
    let fulldiv = e.target.parentElement.parentElement.parentElement;
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
        if (response.action === "add") {
          img.src = "./../assets/fullheart.svg";
        } else {
          fulldiv.style = "display: none";
        }
      }
    });
  }
});
