<?php 
  include "./../pages/connect.php";
  if(isset($_POST["add-recipe"])){
    var_dump($_FILES);
    $image=$_FILES["image"]["name"];
    $fileTempName=$_FILES["image"]["tmp_name"];
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
    try{
      $recipe=$connection->prepare("INSERT INTO recipe (name, time, rating, calories, proteins, carbs, fat, sugar, fiber, img) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :f)");
      $recipe->execute(["a"=>$name, "b"=>$time, "c"=>$rating, "d"=>$calories, "e"=>$proteins, "f"=>$carbs, "g"=>$fat, "h"=>$sugar, "i"=>$fiber, "f"=>$image]);
      $arr1=array($fileTempName);
      $arr2=array("Uploads/recipe/".$image);
      $id=$connection->prepare("SELECT id FROM recipe WHERE img=:a");
      $id->execute(["a"=>$image]);
      $id=$id->fetchColumn();
      try{
        for($i=0; $i<$_POST["methodnum"]; $i++){
          $meth=$_POST["meth{$i}"];
          $methim=$_FILES["methim{$i}"]["name"];
          $methim_temp=$_FILES["methim{$i}"]["tmp_name"];
          $method=$connection->prepare("INSERT INTO method (id, methodid, method, img) VALUES (:a, :b, :c, :d)");
          $method->execute(["a"=>$id, "b"=>$i, "c"=>$meth, "d"=>$methim]);
          array_push($arr1, $methim_temp);
          array_push($arr2, "Uploads/method/".$methim);
        }
        for($i=0; $i<$_POST["ingredientnum"]; $i++){
          $ing=$_POST["ing{$i}"];
          $ingredients=$connection->prepare("INSERT INTO ingredients (id, ingredientid, ingredient) VALUES (:a, :b, :c)");
          $ingredients->execute(["a"=>$id, "b"=>$i, "c"=>$ing]);
        }
        for($i=0; $i<count($arr1); $i++){
          if(move_uploaded_file($arr1[$i], $arr2[$i])){
            echo "HI";
          }
        }
        $_SESSION["new-recipe"]="form added";
      }
      catch(PDOException $e){
        $del=$connection->prepare("DELETE FROM recipe WHERE id=:a");
        $del->execute(["a"=>$id]);
        $_SESSION["new-recipe"]="form not added. Duplicate image present";
      }
    }
    catch(PDOException $e){
      $_SESSION["new-recipe"]="form not added. Duplicate image present.";
    }
    header("Location: addrecipe.php");
  }
?>