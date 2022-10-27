<?php 
include 'connect.php';
$c=gmp_init($_POST["c"]);
$d=gmp_init("882564595536224140639625987657529300394956519977044270821168");
$n=gmp_init("882564595536224133043402117781943411655206608208563741392896");
$m=gmp_powm($c, $d, $n);
$newData=$pdo->open();
$checkData=$newData->prepare("SELECT COUNT(*) FROM profile WHERE m=:a");
$checkData->execute(['a'=>$m]);
if($checkData->fetchColumn()==1){
  $_SESSION["m"]=$m;
  echo "<script>localStorage.setItem(\"c\", BigInt({$c}));</script>";
  header("Location: index.php");
}
else{
  header("Location: signIn.php");
}
?>