<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RecipeWise</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="./../styling/style.css">
  </head>
  <body>
    <div>
      <div class="to">
        <div class="flex spacebetween aligncenter">
          <span class="tit">RecipeWise</span>
          <img class="im toggleprof" src="./../assets/prof.png" alt="profile image" tabindex="1">
          <div class="profile-box profempty">
            <div class="profile-in">
              <img class="edit" src="./../assets/editprofile.svg" alt="Edit profile image">
              <img class="im" src="./../assets/prof.png" alt="profile image">
            </div>
            <span>@jennifer.daniels</span>
            <h5>Jennifer Daniels</h5>
            <div class="profilelinks">
              <a href="">Account</a>
              <a href="">Liked Recipes</a>
              <a href="">Log Out</a>
            </div>
          </div>
        </div>
      </div>
      <img class="svg" src="./../assets/headsmall.svg" alt="">
    </div>
    <div class="banner">
      <img src="./../assets/chicken1.png" alt="chicken image">
      <span>Grilled Chicken Breast with Bacon</span>

    </div>
  </body>
  <footer>
    <div class="flex spacebetween">
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
          <span class="meschar">
            0/256
          </span>
          <button type="submit">
            <img src="./../assets/plane.svg" alt="plane image">
          </button>
        </div>
      </div>
      <div>
        <span class="colw popbo consi">Sitemap</span>
        <div>
          <span class="bl colw popno emsi mato mabo">Home</span>
          <span class="bl colw popno emsi mabo">My Profile</span>
          <span class="bl colw popno emsi mabo">About Us</span>
          <span class="bl colw popno emsi mabo">Privacy Policy</span>
        </div>
      </div>
      <div>
        <img src="./../assets/logo.png" class="log" alt="Logo">
        <div class="flex aligncenter">
          <img src="./../assets/email.png" class="emicon" alt="email icon">
          <span class="colw popno emsi emtext">support@recipewise.com</span>
        </div>
        <div class="flex aligncenter contacttop">
          <img src="./../assets/phone.png" class="phicon" alt="phone icon">
          <span class="colw popno emsi">1300 566 466</span>
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
    <hr>
    <span class="allrights">&copy; 2022 RecipeWise&trade; | All Rights Reserved</span>
  </footer>
  <script src="./script.js">
    
  </script>
</html>