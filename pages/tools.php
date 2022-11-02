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
function get_prof_fname(){
  global $connection, $m;
  $fname=$connection->prepare("SELECT firstname FROM profile WHERE m=:a");
  $fname->execute(["a"=>$m]);
  $res=$fname->fetch(PDO::FETCH_ASSOC);
  return $res["firstname"];
}
function get_prof_lname(){
  global $connection, $m;
  $lname=$connection->prepare("SELECT lastname FROM profile WHERE m=:a");
  $lname->execute(["a"=>$m]);
  $res=$lname->fetch(PDO::FETCH_ASSOC);
  return $res["lastname"];
}
function get_prof_email(){
  global $connection, $m;
  $email=$connection->prepare("SELECT email FROM profile WHERE m=:a");
  $email->execute(["a"=>$m]);
  $res=$email->fetch(PDO::FETCH_ASSOC);
  return $res["email"];
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
  while($res=$methods->fetch(PDO::FETCH_ASSOC)){
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
function get_cuisine($type){
  global $connection, $m;
  $cont=$connection->prepare("SELECT id, name, img, time, rating FROM recipe WHERE cuisine=:a");
  $cont->execute(["a"=>$type]);
  while($res=$cont->fetch(PDO::FETCH_ASSOC)){
    $heart="heart.png";
    $isliked=$connection->prepare("SELECT COUNT(*) FROM likes WHERE id=:a AND m=:b");
    $isliked->execute(["a"=>$res["id"], "b"=>$m]);
    if($isliked->fetchColumn()>0){
      $heart="fullheart.svg";
    }
    echo <<< "CDATA"
    <div>
      <div class="foodimg">
        <a style="cursor: default"href="./addlike.php?id={$res['id']}"><img class="like empty" src="./../assets/{$heart}" alt="heart image"></a>
        <div class="duration">
          <img src="./../assets/clock.svg" alt="clock image">
          <span class="dur">{$res['time']} min</span>
        </div>
        <a href="./recipe.php?id={$res['id']}"><img class="images" src="./../admin/Uploads/recipe/{$res['img']}" alt="burger image"></a>
      </div>
      <div class="food-text">
        <h3>
          <a class="reclink" href="">{$res['name']}</a>
        </h3>
      </div>
      <div class="rating">
    CDATA;
    for($i=0; $i<$res["rating"]; $i++){
      echo "<img src=\"./../assets/star-solid.png\" alt=\"solid star\">";
    }
    for($i=$res["rating"]; $i<5; $i++){
      echo "<img src=\"./../assets/star-regular.png\" alt=\"solid star\">";
    }
    echo "</div></div>";
  }
}
function is_liked1(){
  global $connection, $m;
  $heart="heart.png";
  $isliked=$connection->prepare("SELECT COUNT(*) FROM likes WHERE id=:a AND m=:b");
  $isliked->execute(["a"=>$_GET["id"], "b"=>$m]);
  if($isliked->fetchColumn()>0){
    $heart="fullheart.svg";
  }
  echo $heart;
}
function is_liked2(){
  global $connection, $m;
  $heart="whitelike.svg";
  $isliked=$connection->prepare("SELECT COUNT(*) FROM likes WHERE id=:a AND m=:b");
  $isliked->execute(["a"=>$_GET["id"], "b"=>$m]);
  if($isliked->fetchColumn()>0){
    $heart="whitelikefull.svg";
  }
  echo $heart;
}
function get_liked(){
  global $connection, $m;
  $liked=$connection->prepare("SELECT recipe.id, name, img, time, rating FROM recipe JOIN(SELECT id, m FROM likes) tab1 ON tab1.id=recipe.id WHERE tab1.m=:a");
  $liked->execute(["a"=>$m]);
  echo "<div class=\"slide\"><div class=\"slideinner\">";
  $coun=0;
  while($res=$liked->fetch(PDO::FETCH_ASSOC)){
    if($coun%6==0 && $coun!=0){
      echo "</div></div><div class=\"slide\"><div class=\"slideinner\">";
    }
    echo <<< "CDATA"
    <div>
      <div class="foodimg">
        <a style="cursor: default" href="./ridlike.php?id={$res['id']}"><img class="like full" src="./../assets/fullheart.svg" alt="heart image"></a>
        <div class="duration">
          <img src="./../assets/clock.svg" alt="clock image">
          <span class="dur">{$res['time']} min</span>
        </div>
        <a href="./recipe.php?id={$res['id']}"><img class="images" src="./../admin/Uploads/recipe/{$res['img']}" alt="burger image"></a>
      </div>
      <div class="food-text">
        <h3>
          <a class="reclink" href="">{$res['name']}</a>
        </h3>
      </div>
      <div class="rating">
    CDATA;
    for($i=0; $i<$res['rating']; $i++){
      echo "<img src=\"./../assets/star-solid.png\" alt=\"solid star\">";
    }
    for($i=$res['rating']; $i<5; $i++){
      echo "<img src=\"./../assets/star-regular.png\" alt=\"solid star\">";
    }
    echo "</div></div>";
    $coun++;
  }
  echo "</div></div>";
}
function get_res(){
  global $connection, $m;
  $searchtype=$connection->prepare("SELECT searchtype FROM profile WHERE m=:a");
  $searchtype->execute(["a"=>$m]);
  $type=$searchtype->fetch(PDO::FETCH_ASSOC);
  $mystring=$_GET["in"];
  if($type["searchtype"]=="title" && $mystring[0]!="#"){
    $search=$connection->prepare("SELECT name, time, img, id, rating FROM recipe WHERE LOWER(name) LIKE :a");
    $st="%".$_GET["in"]."%";
    $search->execute(["a"=>$st]);
  }
  else if($type["searchtype"]=="ingredient" && $mystring[0]!="#"){
    $search=$connection->prepare("SELECT name, time, img, recipe.id, rating, tab1.ingredient ingredient FROM recipe JOIN (SELECT ingredient, id FROM ingredients) tab1 WHERE tab1.id=recipe.id AND LOWER(tab1.ingredient) LIKE :a GROUP BY recipe.id");
    $st="%".$_GET["in"]."%";
    $search->execute(["a"=>$st]);
  }
  else{
    $search=$connection->prepare("SELECT name, time, img, id, rating FROM recipe WHERE tag=:a");
    $st=$_GET["in"];
    $search->execute(["a"=>$st]);
  }
  echo "<div class=\"slide\"><div class=\"slideinner\">";
  $coun=0;
  while($res=$search->fetch(PDO::FETCH_ASSOC)){
    $heart="heart.png";
    $isliked=$connection->prepare("SELECT COUNT(*) FROM likes WHERE id=:a AND m=:b");
    $isliked->execute(["a"=>$res["id"], "b"=>$m]);
    if($isliked->fetchColumn()>0){
      $heart="fullheart.svg";
    }
    if($coun%6==0 && $coun!=0){
      echo "</div></div><div class=\"slide\"><div class=\"slideinner\">";
    }
    echo <<< "CDATA"
    <div>
      <div class="foodimg">
        <a style="cursor: default" href="./changelike.php?id={$res['id']}"><img class="like full" src="./../assets/{$heart}" alt="heart image"></a>
        <div class="duration">
          <img src="./../assets/clock.svg" alt="clock image">
          <span class="dur">{$res['time']} min</span>
        </div>
        <a href="./recipe.php?id={$res['id']}"><img class="images" src="./../admin/Uploads/recipe/{$res['img']}" alt="burger image"></a>
      </div>
      <div class="food-text">
        <h3>
          <a class="reclink" href="">{$res['name']}</a>
        </h3>
      </div>
      <div class="rating">
    CDATA;
    for($i=0; $i<$res['rating']; $i++){
      echo "<img src=\"./../assets/star-solid.png\" alt=\"solid star\">";
    }
    for($i=$res['rating']; $i<5; $i++){
      echo "<img src=\"./../assets/star-regular.png\" alt=\"solid star\">";
    }
    echo "</div></div>";
    $coun++;
  }
  echo "</div></div>";
}
function add_to_history(){
  global $connection, $m;
  $searchtype=$connection->prepare("SELECT searchtype FROM profile WHERE m=:a");
  $searchtype->execute(["a"=>$m]);
  $res=$searchtype->fetch(PDO::FETCH_ASSOC);
  $add=$connection->prepare("INSERT INTO history(m, date, search, searchtype) VALUES(:a, :b, :c, :d)");
  $date = date('Y-m-d H:i:s');
  $add->execute(["a"=>$m, "b"=>$date, "c"=>$_GET["in"], "d"=>$res["searchtype"]]);
}
function get_history(){
  global $connection, $m;
  $history=$connection->prepare("SELECT date, search, searchtype FROM history WHERE m=:a");
  $history->execute(["a"=>$m]);
  while($res=$history->fetch(PDO::FETCH_ASSOC)){
    echo <<< "CDATA"
    <tr>
      <td>{$res['date']}</td>
      <td>{$res['search']}</td>
      <td>{$res['searchtype']}</td>
    </tr>
    CDATA;
  }
}
function fi(){
  global $connection, $m;
  $searchtype=$connection->prepare("SELECT searchtype FROM profile WHERE m=:a");
  $searchtype->execute(["a"=>$m]);
  $res=$searchtype->fetch(PDO::FETCH_ASSOC);
  if($res["searchtype"]=="title"){
    return "selected";
  }
  return "";
}
function se(){
  global $connection, $m;
  $searchtype=$connection->prepare("SELECT searchtype FROM profile WHERE m=:a");
  $searchtype->execute(["a"=>$m]);
  $res=$searchtype->fetch(PDO::FETCH_ASSOC);
  if($res["searchtype"]=="ingredient"){
    return "selected";
  }
  return "";
}
function get_comments(){
  global $connection, $m;
  $display=$connection->prepare("SELECT m, rating, com, tim FROM comments WHERE recid=:a");
  $display->execute(["a"=>$_GET["id"]]);
  while($res=$display->fetch(PDO::FETCH_ASSOC)){
    $profile=$connection->prepare("SELECT profimg, firstname, lastname FROM profile WHERE m=:a");
    $profile->execute(["a"=>$res["m"]]);
    $prof=$profile->fetch(PDO::FETCH_ASSOC);
    $rat1="<img src=\"./../assets/star-solid.png\" alt=\"\">";
    $rat2="<img src=\"./../assets/star-regular.png\" alt=\"\">";
    $rat="";
    for($i=0; $i<$res["rating"]; $i++){
      $rat.=$rat1;
    }
    for($i=$res["rating"]; $i<5; $i++){
      $rat.=$rat2;
    }
    echo <<< "CDATA"
    <div class="comments">
      <div>
        <div class="actualcomment">
          <div class="user flex">
            <img src="./../assets/profiles/{$res['m']}/{$prof['profimg']}" alt="">
            <div class="rightcomment">
              <h6>{$prof['firstname']} {$prof['lastname']}</h6>
              <span>{$res['tim']}</span>
            </div>
          </div>
          <div>
            <div class="user-rating flex spacebetween">
              {$rat}
            </div>
            <p class="user-comment">
              {$res['com']}
            </p>
          </div>
        </div>
      </div>
    </div>
    CDATA;
  }
}
?>