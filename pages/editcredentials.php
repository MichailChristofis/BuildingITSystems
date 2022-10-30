<?php
include "connect.php";
$m=$_SESSION["m"];
$username=$_POST["uname"];
$us=$username;
$opass=$_POST["opass"];
$npass=$_POST["npass"];
$cpass=$_POST["cpass"];
$username.=$opass;
$hash=gmp_init(0);
$n=gmp_init("882564595536224140639625987659416029426239230804614613279163");
for($i=0; $i<strlen($username); $i++){
  $hash=gmp_mul("131", $hash);
  $hash=gmp_add($hash, gmp_init(ord($username[$i])));
  $hash=gmp_mod($hash, $n);
}
echo $m;
echo "<br>";
if(gmp_cmp($hash, $m)!=0){
  $_SESSION["ret"]="Username and password are incorrect. Please try again.";
  header("Location: profile.php");
}
else{
  if($npass==$cpass){
    $npasshash=gmp_init(0);
    $us.=$npass;
    for($i=0; $i<strlen($us); $i++){
      $npasshash=gmp_mul("131", $npasshash);
      $npasshash=gmp_add($npasshash, gmp_init(ord($us[$i])));
      $npasshash=gmp_mod($npasshash, $n);
    }
    $newData=$pdo->open();
    $insertData=$newData->exec("SET FOREIGN_KEY_CHECKS=OFF");
    $insertData=$newData->prepare("UPDATE profile SET m=:a WHERE m=:b");
    echo "HI<br>";
    try{
      $insertData->execute(['a'=>$npasshash, "b"=>$m]);
      $insertData=$newData->exec("SET FOREIGN_KEY_CHECKS=ON");
      $c=gmp_powm($npasshash, "65537", $n);
      if(!file_exists("./../assets/profiles/{$npasshash}")){
        mkdir("./../assets/profiles/{$npasshash}", 0777, true);
        copy("./../assets/def.png", "./../assets/profiles/{$npasshash}/def.png");
      }
      $getim=$newData->prepare("SELECT profimg FROM profile WHERE m=:a");
      $getim->execute(["a"=>$npasshash]);
      $res=$getim->fetch(PDO::FETCH_ASSOC);
      $te=$res["profimg"];
      echo "./../assets/profiles/{$npasshash}/{$te}<br>";
      copy("./../assets/profiles/{$m}/{$te}", "./../assets/profiles/{$npasshash}/{$te}");
      $updata=$newData->exec("SET FOREIGN_KEY_CHECKS=OFF");
      $updata=$newData->prepare("UPDATE likes SET m=:a WHERE m=:b");
      $updata->execute(["a"=>$npasshash, "b"=>$m]);
      $updata=$newData->exec("SET FOREIGN_KEY_CHECKS=ON");
      $updata=$newData->exec("SET FOREIGN_KEY_CHECKS=OFF");
      $updata=$newData->prepare("UPDATE history SET m=:a WHERE m=:b");
      $updata->execute(["a"=>$npasshash, "b"=>$m]);
      $updata=$newData->exec("SET FOREIGN_KEY_CHECKS=ON");
      session_destroy();
      session_start();
      $_SESSION["m"]=$npasshash;
      $_SESSION["sc"]="<script>localStorage.setItem(\"c\", {$c}n);</script>";
    }
    catch(PDOException $e){
      echo $e;
      $_SESSION["ret"]="This username is currently in use, please try a different username.";
    }
  }
  else{
    $_SESSION["ret"]="Please have the same input for both new password and confirm new password.";
  }
  header("Location: profile.php");
}
?>