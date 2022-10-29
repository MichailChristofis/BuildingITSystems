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
function get_rec_img($id){
  global $connection;
  $img=$connection->prepare("SELECT img FROM recipe WHERE id=:a");
  $img->execute(["a"=>$id]);
  $res=$img->fetch(PDO::FETCH_ASSOC);
  $h=$res["img"];
  return "./../admin/Uploads/recipe/{$h}";
}
function get_rec_tit($id){
  global $connection;
  $tit=$connection->prepare("SELECT name FROM recipe WHERE id=:a");
  $tit->execute(["a"=>$id]);
  $res=$tit->fetch(PDO::FETCH_ASSOC);
  return $res["name"];
}
function get_rec_stars($id){
  global $connection;
  $tit=$connection->prepare("SELECT rating FROM recipe WHERE id=:a");
  $tit->execute(["a"=>$id]);
  $res=$tit->fetch(PDO::FETCH_ASSOC);
  for($i=0; $i<$res["rating"]; $i++){
    echo <<< "CDATA"
    <img class="solstar" src="./../assets/star-solid.png" alt="solid star image">
    CDATA;
  }
  for($i=$res["rating"]; $i<5; $i++){
    echo <<< "CDATA"
    <img class="solstar" src="./../assets/star-regular.png" alt="solid star image">
    CDATA;
  }
}
function get_rec_protein($id){
  global $connection;
  $protein=$connection->prepare("SELECT proteins FROM recipe WHERE id=:a");
  $protein->execute(["a"=>$id]);
  $res=$protein->fetch(PDO::FETCH_ASSOC);
  if($res["proteins"]==0){
    $res["proteins"]=60;
  }
  return $res["proteins"];
}
function get_rec_carbs($id){
  global $connection;
  $carbs=$connection->prepare("SELECT carbs FROM recipe WHERE id=:a");
  $carbs->execute(["a"=>$id]);
  $res=$carbs->fetch(PDO::FETCH_ASSOC);
  if($res["carbs"]==0){
    $res["carbs"]=20;
  }
  return $res["carbs"];
}
function get_rec_cal($id){
  global $connection;
  $cals=$connection->prepare("SELECT calories FROM recipe WHERE id=:a");
  $cals->execute(["a"=>$id]);
  $res=$cals->fetch(PDO::FETCH_ASSOC);
  if($res["calories"]==0){
    $res["calories"]=500;
  }
  return $res["calories"];
}
function get_rec_time($id){
  global $connection;
  $time=$connection->prepare("SELECT time FROM recipe WHERE id=:a");
  $time->execute(["a"=>$id]);
  $res=$time->fetch(PDO::FETCH_ASSOC);
  if($res["time"]==0){
    $res["time"]=40;
  }
  return $res["time"];
}
function get_rec_fiber($id){
  global $connection;
  $fiber=$connection->prepare("SELECT fiber FROM recipe WHERE id=:a");
  $fiber->execute(["a"=>$id]);
  $res=$fiber->fetch(PDO::FETCH_ASSOC);
  if($res["fiber"]==0){
    $res["fiber"]=30;
  }
  return $res["fiber"];
}
function get_rec_sugar($id){
  global $connection;
  $sugar=$connection->prepare("SELECT sugar FROM recipe WHERE id=:a");
  $sugar->execute(["a"=>$id]);
  $res=$sugar->fetch(PDO::FETCH_ASSOC);
  if($res["sugar"]==0){
    $res["sugar"]=70;
  }
  return $res["sugar"];
}
function get_ingredients($id){
  global $connection;
  $ingredients=$connection->prepare("SELECT ingredient FROM ingredients WHERE id=:a");
  $ingredients->execute(["a"=>$id]);
  echo "<ol>";
  while($res=$ingredients->fetch(PDO::FETCH_ASSOC)){
    echo "<li>".$res["ingredient"]."</li>";
  }
  echo "</ol>";
}
function get_methods($id){
  global $connection;
  $methods=$connection->prepare("SELECT method, img FROM method WHERE id=:a");
  $methods->execute(["a"=>$id]);
  echo "<ol>";
  while($res=$methods->fetch("PDO"::FETCH_ASSOC)){
    echo "<li><p>";
    if($res["method"][1]!="."){
      echo $res["method"];
    }
    else{
      echo substr($res["method"], 2);
    }
    echo "</p>";
    echo "<img src=\"./../admin/Uploads/method/".$res["img"]."\"</li>";
  }
  echo "</ol>";
}
function get_spanish(){
  global $connection;
  $cont=$connection->exec("SELECT name, img, time, rating WHERE cuisine='Spanish'")
}
?>