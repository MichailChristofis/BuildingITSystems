<?php 
  include "./../pages/connect.php";
  if(isset($_POST["add-recipe"])){
    $image=$_FILES["image"]["name"];
    $name=$_POST["name"];
    $time=$_POST["time"];
    $rating=$_POST["rating"];
    $calories=$_POST["calories"];
    $proteins=$_POST["proteins"];
    $carbs=$_POST["carbs"];
    $fat=$_POST["fat"];
    $sugar=$_POST["sugar"];
    $fiber=$_POST["fiber"];
    $connection=$pdo->open();
    $recipe=$connection->prepare("INSERT INTO recipe (name, time, rating, calories, proteins, carbs, fat, sugar, fiber, img) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :f)");
    $recipe->execute(["a"=>$name, "b"=>$time, "c"=>$rating, "d"=>$calories, "e"=>$proteins, "f"=>$carbs, "g"=>$fat, "h"=>$sugar, "i"=>$fiber, "f"=>$image]);
    if($recipe->rowCount()>0){
      $_SESSION["new-recipe"]="one recipe added";
    }
    else{
      $_SESSION["new-recipe"]="recipe not added";
    }
    header("Location: addrecipe.php");
  }
?>