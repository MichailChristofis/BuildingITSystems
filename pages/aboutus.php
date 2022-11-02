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
    <!-- <link rel="stylesheet" href="/styling/rellax.min.js" type="text/Javascript">     -->
  </head>

  <body>
    <div class="over">
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
      </div>
      <img class="svg" src="./../assets/headsmall.svg" alt="">
    <div class="aboutus"> 
        
        <div class = "herotitle">
            <h1 style="text-align: center; font-size: 40px;">Cooking. <span style="color: #FA003F;">Simplified.</span></h1>
        </div>

        <div class = "flex-container">
          <div class="rellax" data-rellax-speed="-0.5" class = "flex-item-left">
            <img src="./../assets/aboutus/parallax1.jpg" style="width:70%; height: auto;">
          </div>
          <div class="rellax" data-rellax-speed="1" class = "flex-item-mid">
            <img src="./../assets/aboutus/parallax2.jpg" class="paraimg" style="width:70%; height: auto;">
          </div>
          <div class="rellax" data-rellax-speed="-1" class = "flex-item-right">
            <img src="./../assets/aboutus/parallax3.jpg" class="paraimg" style="width:70%; height: auto;">
          </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
        <script>
          // Accepts any class name
          var rellax = new Rellax('.rellax');
        </script>

        <div id = "ourstorytext">
          <h2>Our Story.</h2>
          <p>We are a young group of individuals who seek to make the every day tedious task into a much easier endeavor. Starting off with something we all do everyday, and that is to make/eat food! Our first step is streamlining and making this often draining task a more interactive and catered process for everyone involved.</p>
        </div>

        <div id="aboutusperson">
          <img src="./../assets/aboutusperson.png" style="width:40%; height: auto;">
        </div>
        <div class="theteam">
          <h2>The Team.</h2>
          <div class = "teamgallery">
            <div class="teamimages">
              <img src="./../assets/aboutus/team1.jpg" class="teamimg">
              <img src="./../assets/aboutus/team3.jpg" class="teamimg">
              <img src="./../assets/aboutus/team4.jpg" class="teamimg">
              <img src="./../assets/aboutus/team5.jpg" class="teamimg">
              <img src="./../assets/aboutus/team2.jpg" class="teamimg">
            </div>
          </div>
          

        </div>
        <h2 style="text-align: center; font-size: 30px;">What <span style="color: #FA003F;">people</span> are saying.</h2>
        <div class = "reviews">
          
          <img src="./../assets/aboutus/review1.png">
          <img src="./../assets/aboutus/review2.png">
          <img src="./../assets/aboutus/review3.png">

        </div>

    </div>



  </body>

  <footer>
    <div class="footerdiv">
      <div class="flex spacebetween contactusform">
        <div class="contactw">
          <form action="./sendemail.php" method="POST" id="sendemail"></form>
          <span class="colw popbo consi">Contact Us</span>
          <div class="flex spacebetween mato mabo">
            <span class="colw popno emsi">Email:</span>
            <input form="sendemail" type="text" class="email" name="email" id="email">
          </div>
          <div class="flex spacebetween mabo">
            <span class="colw popno emsi">Subject:</span>
            <input form="sendemail" type="text" class="subject" name="subject" id="subject">
          </div>
          <div class="message">
            <span class="bl colw popno mabo emsi">Message:</span>
            <textarea form="sendemail" name="message" id="mes" class="bl" cols="35" rows="6" maxlength="256"></textarea>
            <div class="numdiv">
              <span class="meschar">
                0/256
              </span>
              <button form="sendemail" type="submit">
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
            <a href="aboutus.php" class="nodec bl colw popno emsi mabo">About Us</a>
            <a href="privacepolicy.php" class="nodec bl colw popno emsi mabo">Privacy Policy</a>
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
            <a class="colw popno emsi emtext" href="mailto:support@recipewis.recipes">support@recipewis.recipes</a>
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
		    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
			  crossorigin="anonymous"></script>
  <script src="./aboutusjquery.js"></script>
    <script src="./aboutus.js"></script>
    <span class="allrights">&copy; 2022 RecipeWise&trade; | All Rights Reserved</span>
  </footer>
</html>