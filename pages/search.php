<?php
include "connect.php";
$connect=$pdo->open();
$search=$connect->prepare("SELECT name, time, img, id FROM recipe WHERE LOWER(name) LIKE :a");
$st="%".$_GET["in"]."%";
$search->execute(["a"=>$st]);
while($res=$search->fetch(PDO::FETCH_ASSOC)){
  
}
?>