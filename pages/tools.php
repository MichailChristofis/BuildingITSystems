<?php
include "connect.php";
if(isset($_SESSION["m"])){
  $m=$_SESSION["m"];
}
$connection=$pdo->open();
function get_prof_img(){
  if(isset($_SESSION["m"])){
    global $m, $connection;
    $img=$connection->prepare("SELECT profimg FROM profile WHERE m=:a");
    $img->execute(["a"=>$m]);
    $res=$img->fetch(PDO::FETCH_ASSOC);
    return "./../assets/profiles/".$m."/".$res["profimg"];
  }
}
?>