<?php
include "connect.php";
$connection=$pdo->open();
$m=$_SESSION["m"];
$id=$_GET["id"];
$resp=0;
$action="";
$haslike=$connection->prepare("SELECT COUNT(*) FROM likes WHERE m=:a AND id=:b");
$haslike->execute(["a"=>$m, "b"=>$id]);
if($haslike->fetchColumn()==0){
  $like=$connection->prepare("INSERT INTO likes (m, id) VALUES (:a, :b)");
  $like->execute(["a"=>$m, "b"=>$id]);
  $resp=1;
  $action="add";
}
else{
  $like=$connection->prepare("DELETE FROM likes WHERE m=:a AND id=:b");
  $like->execute(["a"=>$m, "b"=>$id]);
  $resp=1;
  $action="remove";
}
echo json_encode(["resp"=>$resp, "action"=>$action]);
?>