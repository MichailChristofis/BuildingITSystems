<?php
include "connect.php";
$m=$_SESSION["m"];
$username=$_POST["uname"];
$opass=$_POST["opass"];
$username.=$opass;
$hash=gmp_init(0);
$n=gmp_init("882564595536224140639625987659416029426239230804614613279163");
echo $m;
echo "<br>";
for($i=0; $i<strlen($username); $i++){
  $hash=gmp_mul("131", $hash);
  $hash=gmp_add($hash, gmp_init(ord($username[$i])));
  $hash=gmp_mod($hash, $n);
  echo $hash;
  echo "<br>";
}
?>