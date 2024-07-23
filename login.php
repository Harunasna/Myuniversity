<?php
  require_once "includes/config_session-inc.php";
  require_once "includes/index-inc.php";
  require_once "includes/config_session-inc.php";
  require_once "includes/login-view.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyUniversity/Login-page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    </head>
    <body>
        <button id="scroll-to-top">Home</button>
       <div class="main-container">
            <div class="header">
                <a href="index.php" class="Uni-logobar">
                    <img src="images/uni-logo.svg" alt="MyUniversity-Logo" class="logobar">
                </a>
            </div>
           <div class="main-box">
            <div class="login-container">
                <form action="includes/login-inc.php" method="post">
                    <div class="login-box">
                        <div class="create-acount">
                            <h2>Login</h2>
    
                            <div class="link">
                                <label for="email">E-mail</label>
                                <?php signup_input_email(); ?>
                                <div style="color: red;"><span><?php check_email_empty(); ?></span></div>
                            </div>
                            <div class="link">
                                <label for="password">Password</label>
                                <div class="checkpwd-div">
                                    <input type="password" id="password3" name="password" >
                                    <img src="css/backgrounds/eye-closed.png" class="eye" id="eyeIcon3">
                                </div>
                                <div style="color: red;"><span><?php check_password_empty(); ?></span></div>
                            </div>
                            <div class="link2">
                                <li><b>Don't have an account?</b><a href="signup.php">Sign Up Now!</a></li>
                            </div>
                        </div>
                    </div>
                </div>
    


                   <div class="btn-div">
                    <button type="submit" name="submit" class="btn">Login</button>
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
        <script src="javascript/login.js" async defer></script>
    </body>
</html>