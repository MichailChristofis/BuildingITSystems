<?php
include "connect.php";
$m=$_SESSION["m"];
$image=$_FILES["profilepic"]["name"];
$temp=$_FILES["profilepic"]["tmp_name"];
$connection=$pdo->open();
$change=$connection->prepare("UPDATE profile SET profimg=:a WHERE m=:b");
$change->execute(["a"=>$image, "b"=>$m]);
if(!file_exists("./../assets/profiles/{$m}")){
  mkdir("./../assets/profiles/{$m}", 0777, true);
  copy("./../assets/def.png", "./../assets/profiles/{$m}/def.png");
}
if(move_uploaded_file($temp, "./../assets/profiles/{$m}/".$image)){
  echo "HI";
}
header("Location: profile.php");
?>