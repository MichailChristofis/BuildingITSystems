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
$(".myprofile").submit((e) => {
  e.preventDefault();
  let email = $("#email").val();
  let subject = "Thank you for adding your email to your account";
  $.ajax({
    type: "POST",
    url: "sendmail.php",
    data: { email: email, subject: subject, message: subject },
  }).done(function (response) {
    console.log(response);
  });
  $(".myprofile").unbind("submit").submit();
});
