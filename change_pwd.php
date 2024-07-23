<?php
  require_once "includes/config_session-inc.php";
  require_once "includes/changePwd-view.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyUniversity/Change Password</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    </head>
    <body> 
        <?php  error_msg(); ?>
        <button id="scroll-to-top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
       <div class="main-container">
            <div class="header">
                <a href="homepage.php?edit=0" class="Uni-logobar">
                    <img src="images/uni-logo.svg" alt="MyUniversity-Logo" class="logobar">
                </a>
            </div>
           <div class="main-box">
            <div class="login-container">
                <form action="includes/pwd-inc.php" method="post">
                    <div class="login-box">
                        <div class="create-acount">
                            <h2>Change Password</h2>
    
                            <div class="link">
                                <label for="username">Old Password</label>
                                <div class="checkpwd-div">
                                    <input type="password" id="password1" name="old_pwd" required>
                                    <img src="css/backgrounds/eye-closed.png" id="eyeIcon1" class="eye">
                                </div>
                                <div style="color: red;"><span><?php pwd_error(); ?></span></div>
                            </div>
                            <div class="link">
                                <label for="email">New Password</label>
                                <div class="checkpwd-div">
                                    <input type="password" id="password2" name="new_pwd" required>
                                    <img src="css/backgrounds/eye-closed.png" id="eyeIcon2" class="eye">
                                </div>
                            </div>
                            <div class="link">
                                <label for="jamb-reg">Confirm Password</label>
                                <div class="checkpwd-div">
                                    <input type="password" id="password3" name="con_pwd" required>
                                    <img src="css/backgrounds/eye-closed.png" id="eyeIcon3" class="eye">
                                </div>
                                <div style="color: red;"><span><?php conError(); ?></span></div>
                            </div>
                            
                           
                           
                        </div>
                    </div>
                </div>
    


                   <div class="btn-div">
                    <button type="submit" class="btn">Change</button>
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
        <script src="javascript/change-pwd.js" async defer></script>
    </body>
</html>