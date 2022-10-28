<?php
	include 'connect.php';
  $c=gmp_init($_POST["c"]);
  $d=gmp_init("882564595536224140639625987657529300394956519977044270821168");
  $n=gmp_init("882564595536224133043402117781943411655206608208563741392896");
  $m=gmp_powm($c, $d, $n);
  $newData=$pdo->open();
  $insertData=$newData->prepare("INSERT INTO  profile(m) VALUES(:a)");
  try{
    $insertData->execute(['a'=>$m]);
    $_SESSION["m"]=$m;
    $_SESSION["scr"]="<script>localStorage.setItem(\"c\", BigInt({$c}));</script>";
    header("Location: index.php");
  }
  catch(PDOException $e){
    $_SESSION["res"]="This username is currently in use, please try a different username.";
    header("Location: signUp.php");
  }
?>