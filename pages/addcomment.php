<?php
include "connect.php";
$rating=$_POST["rating"];
$message=$_POST["message"];
$recid=$_POST["recid"];
$m=$_SESSION["m"];
$time=$_POST["date"];
$connection=$pdo->open();
$add=$connection->prepare("INSERT INTO comments (m, recid, rating, com, tim) VALUES(:a, :b, :c, :d, :e)");
$add->execute(["a"=>$m, "b"=>$recid, "c"=>$rating, "d"=>$message, "e"=>$time]);
?>