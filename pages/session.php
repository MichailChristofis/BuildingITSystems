<?php
	include 'connect.php';
  $newData=$pdo->open();
  $dataName="John";
  $dataTime=40;
  $insertData=$newData->prepare("INSERT INTO recipe (name, time) VALUES(:dataName, :dataTime)");
  $insertData->execute(['dataName'=>$dataName, 'dataTime'=>$dataTime]);
  echo $insertData->rowCount();
?>