<?php include "./../pages/connect.php"?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <h3><?php if(isset($_SESSION["new-recipe"])){echo $_SESSION["new-recipe"]; unset($_SESSION["new-recipe"]);}?></h3>
    <form action="./handlerecipe.php" method="POST" enctype="multipart/form-data">
      <label for="name">Input the name of the recipe:</label>
      <input type="text" id="name" name="name">
      <label for="time">Input the duration of the recipe (in minutes):</label>
      <input type="text" id="time" name="time">
      <label for="rating">Input the rating of the recipe (from 1-5):</label>
      <input type="text" id="rating" name="rating">
      <label for="calories">Input the number of calories (as an integer number):</label>
      <input type="text" id="calories" name="calories">
      <label for="proteins">Input the number of proteins (as an integer number):</label>
      <input type="text" id="proteins" name="proteins">
      <label for="carbs">Input the number of carbs (as an integer number):</label>
      <input type="text" id="carbs" name="carbs">
      <label for="fat">Input the number of fat (as an integer number):</label>
      <input type="text" id="fat" name="fat">
      <label for="sugar">Input the number of sugar (as an integer number):</label>
      <input type="text" id="sugar" name="sugar">
      <label for="fiber">Input the number of fiber (as an integer number):</label>
      <input type="text" id="fiber" name="fiber">
      <label for="image">Please select image, with a unique name</label>
      <input type="file" id="image" name="image">
      <h2>Ingredients</h2>
      <label for="ingredientnum">How many ingredients does the recipe have?</label>
      <input type="text" id="ingredientnum" name="ingredientnum">
      <button type="button" id="ingbut">Create</button>
      <h2>Instructions</h2>
      <label for="methodnum">How many steps are there in the recipe?</label>
      <input type="text" id="methodnum" name="methodnum">
      <button type="button" id="methbut">Create</button>
      <input type="submit" value="submit" name="add-recipe">
    </form>
    <style>
      input{
        display: block;
        padding: 10px;
        min-width: 300px;
      }
      label {
        margin-top: 15px;
        margin-bottom: 5px;
        display: block;
      }
    </style>
    <script>
      let create=document.querySelector("#ingbut");
      create.addEventListener("click", ()=>{
        let ingredientnum=document.querySelector("#ingredientnum"), val="";
        for(let i=0; i<ingredientnum.value; i++){
          val+=`<label for=\"ing${i}\">Please input ingredient ${i}:</label><input type=\"text\" id=\"ing${i}\" name=\"ing${i}\">`;
        }
        document.querySelector("#ingbut").insertAdjacentHTML("afterend", val);
      });
      let create1=document.querySelector("#methbut");
      create1.addEventListener("click", ()=>{
        let methodnum=document.querySelector("#methodnum"), val="";
        for(let i=0; i<methodnum.value; i++){
          val+=`<label for=\"meth${i}\">Please input step ${i}:</label><input type=\"text\" id=\"meth${i}\" name=\"meth${i}\">`;
          val+=`<label for=\"methim${i}\">Please select image for step ${i} with a unique name:</label><input type=\"file\" id=\"methim${i}\" name=\"methim${i}\">`;
        }
        document.querySelector("#methbut").insertAdjacentHTML("afterend", val);
      });
    </script>
  </body>
</html>