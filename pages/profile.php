<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RecipeWise</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="./../styling/style.css">
  </head>
  <body>
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
    <main class="account">
      <div class="flex">
        <span class="t">Welcome back,&nbsp;</span>
        <span class="red t">Jennifer</span>
        <span class="t">!</span>
      </div>
      <div class="det spacebetween">
        <div class="fidiv">
          <button class="op nu1">My Profile</button>
          <button class="op nu2">History</button>
          <button class="lah5 op nu3">Security</button>
        </div>
        <div class="topprof no1">
          <img class="setprof" src="./../assets/prof.png" alt="">
          <div>
            <button class="changepic">Change Profile Picture</button>
            <button class="change flex justifycenter aligncenter">
              <img src="./../assets/delete.svg" alt="Delete button">
              <span>Remove</span>
            </button>
          </div>
        </div>
        <form class="myprofile" action="./profchanges.php" method="POST">
          <fieldset>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>
          </fieldset>
          <fieldset>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>
          </fieldset>
          <fieldset>
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
          </fieldset>
          <fieldset>
            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile" required>
          </fieldset>
          <div class="submit">
            <button>Submit</button>
          </div>
        </form>
        <div class="no2 nodisplay">
          <table>
            <tr>
              <th class="da">Date</th>
              <th class="se">Search</th>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
            <tr>
              <td>dd/mm/yyyy</td>
              <td>Lorem Ipsum</td>
            </tr>
          </table>
        </div>
        <div class="no3 nodisplay">
          <form class="creds" action="./profchanges.php" method="POST"> 
            <fieldset>
              <label for="uname">Username:</label>
              <input type="text" id="uname" name="uname" required>
            </fieldset>
            <fieldset>
              <label for="opass">Old Password:</label>
              <input type="text" id="opass" name="opass" required>
            </fieldset>
            <fieldset>
              <label for="npass">New Password:</label>
              <input type="text" id="npass" name="npass" required>
            </fieldset>
            <fieldset>
              <label for="mobile">Confirm New Password:</label>
              <input type="tel" id="mobile" name="mobile" required>
            </fieldset>
            <div class="credsubmit">
              <button>Submit</button>
            </div>
          </form>
        </div>
      </div>
    </main>
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
  <script src="./recipescript.js"></script>
  <script src="./profscript.js"></script>
</html>