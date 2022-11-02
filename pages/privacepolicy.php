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
    <!-- Main Body Content for Privacy Policy -->
    <div class = "ppbody" justify-content="centre">
        <h1>Privacy Policy</h1>
        <p>
            RecipeWise is committed to providing quality services to you and this policy outlines our ongoing obligations to you in respect of how we manage your Personal Information.
            We have adopted the Australian Privacy Principles (APPs) contained in the Privacy Act 1988 (Cth) (the Privacy Act). The NPPs govern the way in which we collect, use, disclose, store, secure and dispose of your Personal Information.
            A copy of the Australian Privacy Principles may be obtained from the website of The Office of the Australian Information Commissioner at www.aoic.gov.au
        </p>
        <br>
        <h2>What is Personal Information and why do we collect it?</h2>
        <p>
            Personal Information is information or an opinion that identifies an individual. Examples of Personal Information we collect include: names, addresses, email addresses, phone and facsimile numbers.
            This Personal Information is obtained in many ways including interviews, correspondence, by telephone, by email, via our website www.recipewise.com.au, from your website, from media and publications, from other publicly available sources, from cookies- delete all that aren’t applicable and from third parties. We don’t guarantee website links or policy of authorised third parties.
            We collect your Personal Information for the primary purpose of providing our services to you, providing information to our clients and marketing. We may also use your Personal Information for secondary purposes closely related to the primary purpose, in circumstances where you would reasonably expect such use or disclosure. You may unsubscribe from our mailing/marketing lists at any time by contacting us in writing.
            When we collect Personal Information we will, where appropriate and where possible, explain to you why we are collecting the information and how we plan to use it.
        </p>
        <br>
        <h2>Sensitive Information</h2>
        <p>
            Sensitive information is defined in the Privacy Act to include information or opinion about such things as an individual's racial or ethnic origin, political opinions, membership of a political association, religious or philosophical beliefs, membership of a trade union or other professional body, criminal record or health information.
            <br>Sensitive information will be used by us only:
        </p>
        <ul>
            <li>For the primary purpose for which it was obtained</li>
            <li>For a secondary purpose that is directly related to the primary purpose</li>
            <li>With your consent; or where required or authorised by law.</li>
        </ul>
        <br>
        <h2>Third Parties</h2>
        <p>
            Where reasonable and practicable to do so, we will collect your Personal Information only from you. However, in some circumstances we may be provided with information by third parties. In such a case we will take reasonable steps to ensure that you are made aware of the information provided to us by the third party.
        </p>
        <br>
        <h2>Disclosure of Personal Information</h2>
        <p>
            Your Personal Information may be disclosed in a number of circumstances including the following:
        </p>
        <ul>
            <li>Third parties where you consent to the use or disclosure; and</li>
            <li>Where required or authorised by law.</li>
        </ul>
        <br>
        <h2>Security of Personal Information</h2>
        <p>
            Your Personal Information is stored in a manner that reasonably protects it from misuse and loss and from unauthorized access, modification or disclosure.
            When your Personal Information is no longer needed for the purpose for which it was obtained, we will take reasonable steps to destroy or permanently de-identify your Personal Information. However, most of the Personal Information is or will be stored in client files which will be kept by us for a minimum of 7 years.
        </p>
        <br>
        <h2>Access to your Personal Information</h2>
        <p>
            You may access the Personal Information we hold about you and to update and/or correct it, subject to certain exceptions. If you wish to access your Personal Information, please contact us in writing.
            Recipe Wise will not charge any fee for your access request but may charge an administrative fee for providing a copy of your Personal Information.
            In order to protect your Personal Information we may require identification from you before releasing the requested information.
        </p>
        <br>
        <h2>Maintaining the Quality of your Personal Information</h2>
        <p>
            It is an important to us that your Personal Information is up to date. We will  take reasonable steps to make sure that your Personal Information is accurate, complete and up-to-date. If you find that the information we have is not up to date or is inaccurate, please advise us as soon as practicable so we can update our records and ensure we can continue to provide quality services to you.
        </p>
        <br>
        <h2>Policy Updates</h2>
        <p>
            This Policy may change from time to time and is available on our website.
            Privacy Policy Complaints and Enquiries
            If you have any queries or complaints about our Privacy Policy please contact us at:
            
            <br><br>202 Fake Road, Fake Suburb, Victoria, Australia, 3002
            <br>support@recipewis.recipes
            <br>1300 566 466
        </p>
 
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
    <script src="./privjquery.js"></script>
    <script src="./priv.js"></script>
    <span class="allrights">&copy; 2022 RecipeWise&trade; | All Rights Reserved</span>
  </footer>
</html>