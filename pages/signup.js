let email = document.querySelector("#email"),
  password = document.querySelector("#password");
let finhash = BigInt(0),
  n = BigInt(882564595536224133043402117781943411655206608208563741392896);
document.querySelector("button").addEventListener("click", () => {
  console.log("HI1");
  let hash = email.value + password.value;
  console.log(hash);
  for (let i = 0; i < hash.length; i++) {
    finhash *= 131n;
    finhash += BigInt(hash.charCodeAt(i));
    finhash %= n;
  }
  let c = BigInt(1);
  for (let i = 0; i < 65537; i++) {
    c = c * finhash;
    c %= n;
  }
  document.querySelector("#c").value = c;
  console.log(document.querySelector("#c"));
});
