<?php
include "connect.php";
$m=$_SESSION["m"];
$connection=$pdo->open();
$change=$connection->prepare("UPDATE profile SET profimg=:a WHERE m=:b");
$change->execute(["a"=>"def.png", "b"=>$m]);
if(!file_exists("./../assets/profiles/{$m}")){
  mkdir("./../assets/profiles/{$m}", 0777, true);
  copy("./../assets/def.png", "./../assets/profiles/{$m}/def.png");
}
header("Location: profile.php");
?>