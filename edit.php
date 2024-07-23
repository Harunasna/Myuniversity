<?php
  require_once "includes/config_session-inc.php";
  require_once "includes/update-view.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyUniversity/Edit profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    </head>
    <body>
        <?php error_msg(); ?>
        <button id="scroll-to-top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
       <div class="main-container">
            <div class="header">
                <a href="homepage.php?edit=0" class="Uni-logobar">
                    <img src="images/uni-logo.svg" alt="MyUniversity-Logo" class="logobar">
                </a>
            </div>
           <div class="main-box">
            <div class="login-container">
                <form action="includes/update-inc.php" method="post">
                    <div class="login-box">
                        <div class="create-acount">
                            <h2>Edit Profile</h2>
    
                            <div class="link">
                                <label for="username">Username</label>
                                <?php signup_input_username(); ?>
                            </div>
                            <div class="link">
                                <label for="email">Email Address</label>
                                <?php signup_input_email(); ?>
                            </div>
                            <div class="link">
                                <label for="jamb-reg">UTME/JAMB Registration Number</label>
                                <?php signup_input_jambReg(); ?>
                            </div>
                            <div class="link">
                                <label for="uni-choice">Select University Of Choice</label>
                                <?php signup_input_uniChoice(); ?>
                            </div>
                            <div class="link">
                                <div class="into2">
                                  <div class="coloum1">
                                    <label for="jamb-year">UTME Year</label>
                                    <?php signup_input_jambYear(); ?>
                                  </div>
                                  <div class="coloum2">
                                    <label for="jamb-score">JAMB Score</label>
                                    <?php signup_input_jambScore(); ?>
                                  </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
    


                   <div class="btn-div">
                    <button type="submit" name="submit" class="btn" >Update</button>
                   </div>
                </form>
          </div>
           </div>
        
           <div class="footer" id="footer">
            <div class="footer-text">
                <div class="h4"><b>Created By</b> <span><a href="">Haruna Sna</a> | <span class="far fa-copyright"></span> 2024 All rights reserved.</span></div>
            </div>
            <div class="footer-icons">
                <img src="images/Fb.svg" alt="icon-facebook" class="icons1">
                <img src="images/instergram.svg" alt="icon-instagram" class="icons2">
                <img src="images/Twitter.svg" alt="icon-twiter" class="icons3">
                <img src="images/Youtube.svg" alt="icon-youtube" class="icons4">

            </div>
        </div>
        <script src="javascript/sign-up.js" async defer></script>
    </body>
</html>