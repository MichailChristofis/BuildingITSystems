<!DOCTYPE html>
<html lang="en">
  <?php 
    include "tools.php";
    if(!isset($_SESSION["m"])){
      echo "<script>localStorage.clear();window.location.href='./signIn.php';</script>";
    }
  ?>
  <head>
    <meta charset="utf-8">
    <title>RecipeWise</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="./../styling/style.css">
  </head>
  <body>
    <div class="over">
      <div class="to to2">
        <div class="flex spacebetween aligncenter">
          <a href="./index.php" class="nodec"><span class="tit">RecipeWise</span></a>
          <img class="im toggleprof" src="<?php echo get_prof_img()?>" alt="profile image" tabindex="1">
          <div class="profile-box profempty">
            <div class="profile-in">
              <img class="edit" src="./../assets/editprofile.svg" alt="Edit profile image">
              <img class="im" src="<?php echo get_prof_img()?>" alt="profile image">
            </div>
            <span class="usr">@jennifer.daniels</span>
            <h5 class="boxname">Jennifer Daniels</h5>
            <div class="profilelinks">
              <a href="./profile.php">Account</a>
              <a href="./liked.php">Liked Recipes</a>
              <a href="./logout.php">Log Out</a>
            </div>
          </div>
        </div>
        <img class="svg" src="./../assets/headsmall.svg" alt="">
      </div>
      <div class="banner">
        <img class="bannerimg" src="<?php echo get_rec_img($_GET["id"])?>" alt="chicken image">
        <div class="details flex spacebetween">
          <div class="titlepar">
            <h2 class="rectitle"><?php echo get_rec_tit($_GET["id"])?></h2>
            <div class="starpar">
              <?php get_rec_stars($_GET["id"])?>
            </div>
          </div>
          <div class="flex nutrients">
            <div class="nutdiv">
              <img src="./../assets/protein.svg" alt="protein">
              <span><?php echo get_rec_protein($_GET["id"])?>g protein</span>
            </div>
            <div class="nutdiv">
              <img src="./../assets/carbs.svg" alt="carbs">
              <span><?php echo get_rec_carbs($_GET["id"])?>g carbs</span>
            </div>
            <div class="nutdiv">
              <img src="./../assets/calories.svg" alt="calories">
              <span><?php echo get_rec_cal($_GET["id"])?> kcal</span>
            </div>
            <div class="nutdiv">
              <img src="./../assets/clock.svg" alt="duration">
              <span><?php echo get_rec_time($_GET["id"])?> min</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <main style="padding:2.3vw">
      <div class="nut">
        <div class="flex spacebetween">
          <div class="nudiv">
            <img src="./../assets/protein.svg" alt="protein">
            <span>60g protein</span>
          </div>
          <div class="nudiv">
            <img src="./../assets/carbs.svg" alt="protein">
            <span>20g carbs</span>
          </div>
          <div class="nudiv">
            <img src="./../assets/calories.svg" alt="calories">
            <span>600 kcal</span>
          </div>
          <div class="nudiv">
            <img src="./../assets/clock.svg" alt="duration">
            <span>40 min</span>
          </div>
        </div>
        <div class="wstarpar">
          <img src="./../assets/star-solid-w.svg" alt="solid star image">
          <img src="./../assets/star-solid-w.svg" alt="solid star image">
          <img src="./../assets/star-solid-w.svg" alt="solid star image">
          <img src="./../assets/star-solid-w.svg" alt="solid star image">
          <img src="./../assets/star-solid-w.svg" alt="solid star image">
        </div>
      </div>
      <div class="inge">
        <div class="flex spacebetween ingeson">
          <div class="ingr">
            <h5>Ingredients</h5>
            <h6>For 4 servings</h6>
            <?php get_ingredients($_GET["id"])?>
          </div>
          <div class="meth">
            <h5>Method</h5>
            <ul>
              <li>
                Calories: <b><?php echo get_rec_cal($_GET["id"])?> kcal</b>
              </li>
              <li>
                Carbs: <b><?php echo get_rec_carbs($_GET["id"])?>g</b>
              </li>
              <li>
                Fiber: <b><?php echo get_rec_fiber($_GET["id"])?>g</b>
              </li>
              <li>
                Protein: <b><?php echo get_rec_protein($_GET["id"])?>g</b>
              </li>
              <li>
                Sugar: <b><?php echo get_rec_sugar($_GET["id"])?>g</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="inf">
          <h5>
            Method:
          </h5>
          <?php get_methods($_GET["id"])?>
        </div>
      </div>
      <div class="ing spacebetween">
        <div>
          <div class="ingredients">
            <h5>Ingredients</h5>
            <h6>For 4 servings</h6>
            <?php get_ingredients($_GET["id"])?>
            <h5>Nutrition Info</h5>
            <ul>
              <li>
                Calories: <b><?php echo get_rec_cal($_GET["id"])?> kcal</b>
              </li>
              <li>
                Carbs: <b><?php echo get_rec_carbs($_GET["id"])?>g</b>
              </li>
              <li>
                Fiber: <b><?php echo get_rec_fiber($_GET["id"])?>g</b>
              </li>
              <li>
                Protein: <b><?php echo get_rec_protein($_GET["id"])?>g</b>
              </li>
              <li>
                Sugar: <b><?php echo get_rec_sugar($_GET["id"])?>g</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="info">
          <h5>
            Method
          </h5>
          <?php get_methods($_GET["id"])?>
        </div>
      </div>
    </main>
  </body>
  <footer>
    <div class="footerdiv">
      <div class="flex spacebetween contactusform">
        <div class="contactw">
          <span class="colw popbo consi">Contact Us</span>
          <div class="flex spacebetween mato mabo">
            <span class="colw popno emsi">Email:</span>
            <input type="text" class="email">
          </div>
          <div class="flex spacebetween mabo">
            <span class="colw popno emsi">Subject:</span>
            <input type="text" class="subject">
          </div>
          <div class="message">
            <span class="bl colw popno mabo emsi">Message:</span>
            <textarea name="message" id="mes" class="bl" cols="35" rows="6" maxlength="256"></textarea>
            <div class="numdiv">
              <span class="meschar">
                0/256
              </span>
              <button type="submit">
                <img src="./../assets/plane.svg" alt="plane image">
              </button>
            </div>
          </div>
        </div>
        <div class="sitemap">
          <span class="colw popbo consi">Sitemap</span>
          <div>
            <a href="index.php" class="nodec bl colw popno emsi mato mabo">Home</a>
            <a href="profile.php" class="nodec bl colw popno emsi mabo">My Profile</a>
            <a href="" class="nodec bl colw popno emsi mabo">About Us</a>
            <a href="" class="nodec bl colw popno emsi mabo">Privacy Policy</a>
          </div>
        </div>
        <div class="ladiv">
          <img src="./../assets/logo.png" class="log" alt="Logo">
          <div class="logoclass">
            <h6 class="logo">Recipe</h6>
            <h6 class="logo">Wise</h6>
          </div>
          <div class="flex aligncenter">
            <img src="./../assets/email.png" class="emicon" alt="email icon">
            <a class="colw popno emsi emtext" href="mailto:support@recipewise.com">support@recipewise.com</a>
          </div>
          <div class="flex aligncenter contacttop">
            <img src="./../assets/phone.png" class="phicon" alt="phone icon">
            <a class="colw popno emsi ph" href="tel:1300566466">1300 566 466</a>
          </div>
          <div class="socialdiv flex spacebetween">
            <img class="socialim" src="./../assets/facebook.png" alt="Facebook image">
            <img class="socialim" src="./../assets/instagram.png" alt="Instagram image">
            <img class="socialim" src="./../assets/tiktok.png" alt="TikTok image">
            <img class="socialim" src="./../assets/youtube.png" alt="YouTube image">
            <img class="socialim" src="./../assets/twitter.png" alt="Twitter image">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <span class="allrights">&copy; 2022 RecipeWise&trade; | All Rights Reserved</span>
  </footer>
  <script src="./recipescript.js">
    
  </script>
</html>