<?php
  require_once "includes/config_session-inc.php";
  require_once "includes/signup-view.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyUniversity/SignUp-page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/sign-up-sucessful.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    </head>
    <body>
        <?php  signup_successfull();  ?>
        <button id="scroll-to-top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
       <div class="main-container">
            <div class="header">
                <a href="index.php" class="Uni-logobar">
                    <img src="images/uni-logo.svg" alt="MyUniversity-Logo" class="logobar">
                </a>
            </div>
           <div class="main-box">
            <div class="login-container">
                <form action="includes/signup-inc.php" method="post">
                    <div class="login-box">
                        <div class="create-acount">
                            <h2>Create An Acount</h2>
    
                            <div class="link">
                                <label for="username">Username</label>
                                <?php signup_input_username(); ?>
                                <div style="color: red;"><span><?php check_username_empty(); ?></span></div>
                                <div style="color: red;"><span><?php check_user_taken(); ?></span></div>
                            </div>
                            <div class="link">
                                <label for="email">Email Address</label>
                                <?php signup_input_email(); ?>
                                <div style="color: red;"><span><?php check_email_empty(); ?></span></div>
                                <div style="color: red;"><span><?php check_email_taken(); ?></span></div>
                            </div>
                            <div class="link">
                                <label for="jamb-reg">UTME/University Registration Number</label>
                                <?php signup_input_jambReg(); ?>
                                <div style="color: red;"><span><?php check_jambReg_empty(); ?></span></div>
                                <div style="color: red;"><span><?php check_jambreg_invalid(); ?></span></div>
                            </div>
                            <div class="link">
                                <label for="uni-choice">Select University Of Choice</label>
                                 <?php signup_input_uniChoice(); ?>
                                 <div style="color: red;"><span><?php check_uni_empty(); ?></span></div>
                            </div>
                            <div class="link">
                                <div class="into2">
                                  <div class="coloum1">
                                    <label for="jamb-year">UTME Year</label>
                                    <?php signup_input_jambYear(); ?>
                                    <div style="color: red;"><span><?php check_uniYear_empty(); ?></span></div>
                                  </div>
                                  <div class="coloum2">
                                    <label for="jamb-score">JAMB Score</label>
                                    <?php signup_input_jambScore(); ?>
                                    <div style="color: red;"><span><?php check_jambScore_empty(); ?></span></div>
                                    <div style="color: red;"><span><?php check_jambscore_invalid(); ?></span></div>
                                  </div>
                                </div>
                            </div>
                            <div class="link">
                                <label for="pwd">Password</label>
                                <div class="checkpwd-div">
                                    <input type="password" id="password" name="password1">
                                    <img src="css/backgrounds/eye-closed.png" class="eye" id="eyeIcon">
                                </div>
                                <div style="color: red;"><span><?php check_password1_empty(); ?></span></div>
                            </div>
                            <div class="link">
                                <label for="password">Confirm Password</label>
                                <div class="checkpwd-div">
                                    <input type="password" id="password2" name="password2">
                                    <img src="css/backgrounds/eye-closed.png" id="eyeIcon2" class="eye">
                                </div>
                                <div style="color: red;"><span><?php check_password2_empty(); ?></span></div>
                                <div style="color: red;"><span><?php check_password_uppercase(); ?></span></div>
                                <div style="color: red;"><span><?php check_password_match(); ?></span></div>
                            </div>
                            <div class="link2">
                                <li><b>Already have an account?</b><a href="login.php">Login</a></li>
                            </div>
                        </div>
                    </div>
                </div>
    


                   <div class="btn-div">
                    <button type="submit" class="btn">Sign Up</button>
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