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
