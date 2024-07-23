<?php
 require_once "includes/config_session-inc.php";
 require_once "includes/homepage_view.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/home-page.css">
        <link rel="stylesheet" href="css/sign-up-sucessful.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    </head>
    <body>
        <div class="body">
        <?php  edit_successfull(); ?>
         <?php error_msg(); ?>
            <div class="header">
                <img src="images/uni-logo.svg" alt="MyUniversity-Logo" class="div-logo">
                
                   <div class="navbar">
                    <div class="icon-box">
                        <a href="edit.php"><div class="div">Edit Info <span><i class="fa-solid fa-pen-to-square"></i></span></div></a>
                    </div>
                    
                    <div class="icon-box">
                        <a href="change_pwd.php"><div class="div">Change Password <span><i class="fa-solid fa-eraser"></i></span></div></a>
                    </div>
                    <div class="icon-box">
                         <a href="login.php"><div class="div" >Log Out <span href="index.php"><i class="fa-solid fa-right-to-bracket"></i></span></div></a>
                    </div>
                   </div>

                    <div class="hamburger-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                      </div>
                </div>
                <div class="container">
                    <button id="scroll-to-top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>

                 <div class="user-info-container" >
                    <div class="user-info-box" id="hideThebox" >
                        <div class="first-div">
                            <img src="images/student-profile.jpg" alt="Your Profile" class="username-profile">
                            <h1><b>Welcome back!</b></h1>
                            <label class="user-info"><?php result_email(); ?></label>
                            <h2>Your Personal Info</h2>
                        </div>

                       <div class="div-hide" id="myDiv">
                        <div class="link">
                            <label class="info">User Name</label>
                            <div class="correct"><?php result_username(); ?></div>
                        </div>
                        <div class="link">
                            
                        <label class="info">Jamb Registration Number</label>
                        <div class="correct"><?php res_jambReg(); ?></div>
                        </div>
                        <div class="link">
                            
                        <label class="info">University of Choice</label>
                        <div class="correct"><?php res_uniChoice(); ?></div>
                        </div>
                        <div class="link">
                            
                        <label class="info">UTME Year</label>
                        <div class="correct"><?php res_jambYear(); ?></div>
                        </div>
                        <div class="link">
                            
                        <label class="info">Jamb Score</label>
                        <div class="correct"><?php res_jambScore(); ?></div>
                        </div>
                       </div>
                        

                        <div class="btn-box">
                            <button class="btn-hide" id="myButton">Hide</button>
                        </div>


                    </div>
                 </div>
                 <div class="admission-status-container">
                    <div class="admission">
                        <p class="adm-text">Admission Status!!!</p>
                        <div class="loading-box">
                         <div class="loader"></div>
                        </div>
                        <div class="check-btn-box">
                            <a href="adm-result.php"><button class="check-btn">Check Now!</button></a>
                        </div>
                     </div>
                  
                     
                    </div>
                    
                    

                </div>
                <footer class="footer" id="footer">
                    <div class="footer-text">
                        <div class="h4"><b>Created By</b> <span><a href="">Haruna Sna</a> | <span class="far fa-copyright"></span> 2024 All rights reserved.</span></div>
                    </div>
                    <div class="footer-icons">
                        <img src="images/Fb.svg" alt="icon-facebook" class="icons1">
                        <img src="images/instergram.svg" alt="icon-instagram" class="icons2">
                        <img src="images/Twitter.svg" alt="icon-twiter" class="icons3">
                        <img src="images/Youtube.svg" alt="icon-youtube" class="icons4">
        
                    </div>
                </footer>
            </div>
        </div>
        <script src="javascript/homepage.js" async defer></script>
    </body>
</html>