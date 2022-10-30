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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RecipeWise</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="./../styling/style.css">
  </head>
  <body>
    <div class="to">
      <div class="flex spacebetween aligncenter">
          <a href="./index.php" class="nodec"><span class="tit">RecipeWise</span></a>
        <img class="im toggleprof" src="<?php echo get_prof_img()?>" alt="profile image" tabindex="1">
        <div class="profile-box profempty">
          <div class="profile-in">
            <img class="edit" src="./../assets/editprofile.svg" alt="Edit profile image">
            <img class="im" src="<?php echo get_prof_img()?>" alt="profile image">
          </div>
          <span class="usr"><?php echo get_prof_email()?></span>
          <h5 class="boxname"><?php echo get_prof_fname()?> <?php echo get_prof_lname()?></h5>
          <div class="profilelinks">
            <a href="./profile.php">Account</a>
            <a href="./liked.php">Liked Recipes</a>
            <a href="./logout.php">Log Out</a>
          </div>
        </div>
      </div>
      <div class="search">
        <span class="search1">search for</span>
        <span class="search2">&nbsp;mexican...</span>
      </div>
      <div class="flex justifycenter searchdiv">
        <form class="searchform" action="./results.php" method="GET">
          <input type="text" class="in" id="in" name="in" placeholder="Search">
        </form>
        <img class="magnifying" src="./../assets/magnifying-glass.png" alt="Magnifying glass">
        <img class="shuffle" src="./../assets/shuffle.png" alt="Shuffle image">
      </div>
      <div class="popsearch flex justifycenter">
        <button>
          #most-popular
        </button>
        <button>
          #quickneasy
        </button>
        <button>
          #dessert
        </button>
        <button>
          #snacks
        </button>
      </div>
    </div>
    <img class="svg" src="./../assets/headsmall.svg" alt="">
    <div class="foodtype flex justifycenter">
      <button class="b1 pressed">
        Spanish
      </button>
      <button class="b2">
        French
      </button>
      <button class="b3">
        English
      </button>
      <button class="b4">
        Australian
      </button>
    </div>
    <main>
      <section class="foodsection spanish">
        <?php get_cuisine("Spanish")?>
      </section>
      <section class="foodsection french goaway">
        <?php get_cuisine("French")?>
      </section>
      <section class="foodsection english goaway">
        <?php get_cuisine("English")?>
      </section>
      <section class="foodsection australian goaway">
        <?php get_cuisine("Australian")?>
      </section>
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
  <script src="./thescript.js" type="text/javascript"></script>
  <?php if(isset($_SESSION["scr"])){echo $_SESSION["scr"];}?>
</html>