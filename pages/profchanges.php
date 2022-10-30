<?php
include "connect.php";
$m=$_SESSION["m"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$searchtype=$_POST["searchtype"];
$connection=$pdo->open();
$addDetails=$connection->prepare("UPDATE profile SET mobile=:a, firstname=:b, lastname=:c, email=:d, searchtype=:f WHERE m=:e");
$addDetails->execute(["a"=>$mobile, "b"=>$fname, "c"=>$lname, "d"=>$email, "e"=>$m, "f"=>$searchtype]);
header("Location: profile.php");
?>