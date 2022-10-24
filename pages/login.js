let email = document.querySelector("#email"),
  password = document.querySelector("#password");
let hash = email.value + password.value,
  finhash = BigInt(0);
document.querySelector("button").addEventListener("click", () => {
  for (let i = 0; i < hash.length; i++) {
    finhash *= 131n;
    finhash += BigInt(hash.charCodeAt(i));
    finhash %= 100000000003;
    console.log(finhash);
  }
  let c = BigInt(1);
  for (let i = 0; i < 65537; i++) {
    c = c * finhash;
    c %= 100000000003n;
  }
});
