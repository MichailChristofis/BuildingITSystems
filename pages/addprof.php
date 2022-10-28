<?php
	include 'connect.php';
  $c=gmp_init($_POST["c"]);
  $d=gmp_init("121832886702415731577073962957377780195510499965398469843281");
  $n=gmp_init("882564595536224140639625987659416029426239230804614613279163");
  $m=gmp_powm($c, $d, $n);
  echo $m;
  $newData=$pdo->open();
  $insertData=$newData->prepare("INSERT INTO  profile(m, profimg) VALUES(:a, :b)");
  try{
    $insertData->execute(['a'=>$m, "b"=>"def.png"]);
    $_SESSION["m"]=$m;
    $_SESSION["scr"]="<script>localStorage.setItem(\"c\", BigInt({$c}));</script>";
    if(!file_exists("./../assets/profiles/{$m}")){
      mkdir("./../assets/profiles/{$m}", 0777, true);
      copy("./../assets/def.png", "./../assets/profiles/{$m}/def.png");

    }
    header("Location: index.php");
  }
  catch(PDOException $e){
    $_SESSION["res"]="This username is currently in use, please try a different username.";
    header("Location: signUp.php");
  }
?>