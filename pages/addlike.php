<?php
include "connect.php";
$connection=$pdo->open();
$m=$_SESSION["m"];
$id=$_GET["id"];
$like=$connection->prepare("INSERT INTO likes (m, id) VALUES (:a, :b)");
$like->execute(["a"=>$m, "b"=>$id]);
header("Location: index.php");
?>