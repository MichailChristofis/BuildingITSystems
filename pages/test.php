<?php
$p=gmp_init("857504083339712752489993810777");
$q=gmp_init("1029224947942998075080348647219");
$d=gmp_init("121832886702415731577073962957377780195510499965398469843281");
$n=gmp_init("882564595536224140639625987659416029426239230804614613279163");
$e=gmp_init("65537");
echo gmp_powm("5613103235506510505572189087496840", $e, $n);
echo "<br>";
echo gmp_powm(gmp_powm("5613103235506510505572189087496840", $e, $n), $d, $n);
?>