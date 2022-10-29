<?php 
include 'connect.php';
$c=gmp_init($_POST["c"]);
echo $c;
$d=gmp_init("121832886702415731577073962957377780195510499965398469843281");
$n=gmp_init("882564595536224140639625987659416029426239230804614613279163");
$m=gmp_powm($c, $d, $n);
echo "<br>";
echo $m;
$newData=$pdo->open();
$checkData=$newData->prepare("SELECT COUNT(*) FROM profile WHERE m=:a");
$checkData->execute(['a'=>$m]);
if($checkData->fetchColumn()==1){
  $_SESSION["m"]=$m;
  $_SESSION["scr"]="<script>localStorage.setItem(\"c\", {$c}n);</script>";
  header("Location: index.php");
}
else{
  $_SESSION["res"]="Sign in invalid, please try again";
  header("Location: signIn.php");
}
?>