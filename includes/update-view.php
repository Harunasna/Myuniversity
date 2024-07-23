                                  
<?php

// for username throw back;
function signup_input_username() 
{
  if(isset($_SESSION["res_username"])) {

    // thowback the valid user input['username']
   echo '<input type="text" name="username" value="' .$_SESSION["res_username"] . '" >';
}     
}
// for email throw back;
function signup_input_email() 
{
  if(isset($_SESSION["res_email"])) {

    // thowback the valid user input['username']
   echo '<input type="email" name="email" value="' . $_SESSION["res_email"] . '" >';
   
}      
}
// for Reg number throw back;
function signup_input_jambReg() 
{
  if(isset($_SESSION["res_jambReg"])) {

    // thowback the valid user input['username'];
   echo '<input type="text" name="jambReg" maxlength="16" value="' .$_SESSION["res_jambReg"] . '">';
  
}     
}
// for uni-choice throw back;
function signup_input_uniChoice() 
{
  if(isset($_SESSION["res_uniChoice"])) {

    // thowback the valid user input['username']
   echo '<select name="uniChoice" id="uni-choice">
              <option>'. $_SESSION["res_uniChoice"].'</option>
              <option>Ahmadu bello University, Zaria(ABU)</option>
              <option>Bayero University, Kano(BUK)</option>
              <option>University of Lagos, (UNILAG)</option>
              <option>Federal University of Technology, Minna(FUT)</option>
              <option>University of Port Harcourt</option>
              <option>Ibrahim Badamasi Babangida University, Lapia(IBB)</option>
              <option>Nile University of Nigeria</option>
              <option>Usmanu Danfodiyo University, Sokoto(UDOSOK)</option>
              <option>University of Ilorin(UNILORIN)</option>
              <option>Federal University of Technology Akure</option>
              <option>University of Abuja </option>
            </select>';
}      
}
// throw back for jamb year
function signup_input_jambYear() 
{
  if($_SESSION["res_jambYear"]) {

    // thowback the valid user input['username']
   echo '<select name="jambYear">
        <option>'. $_SESSION["res_jambYear"] . '</option>
        <option class="option">UTME 2021</option>
        <option class="option">UTME 2022</option>
        <option class="option">UTME 2023</option>
        <option class="option">UTME 2024</option>
      </select>';
}        
}
// throw back for jambscore;
function signup_input_jambScore() 
{
  if(isset($_SESSION["res_jambScore"])) {

    // thowback the valid user input['username']
   echo '<input type="text" name="jambScore" maxlength="3" value="' . $_SESSION["res_jambScore"] . '">';
}        
}
function error_msg()
{
   if(!isset($_SESSION["res_email"]) || !isset($_SESSION["res_id"])) {

      // display signup sucessfull;
      echo "<br>";
      echo "<div class='signbox'>
      <div class='sign_header'>
          Sorry Your login session has expired!
      </div>
      <div class='sign-up_paragh'>
          <p class='para'>please re-login</p> <a href='login.php' class='sign-btn'>Login!</a>
      </div>
  </div> ";
  die();
   }
}




























// FOR INPUT EMPTY;
function check_username_empty()
{
    if(isset($_SESSION["username_empty"])){
      $username_empty = $_SESSION["username_empty"];

      echo $username_empty;
    }
    unset($_SESSION["username_empty"]);
}

function check_email_empty()
{
    if(isset($_SESSION["email_empty"])){
      $email_empty = $_SESSION["email_empty"];

      echo $email_empty;
    }
    unset($_SESSION["email_empty"]);
}

function check_jambReg_empty()
{
    if(isset($_SESSION["jambReg_empty"])){
      $jambReg_empty = $_SESSION["jambReg_empty"];

      echo $jambReg_empty;
    }
    unset($_SESSION["jambReg_empty"]);
}


function check_uni_empty()
{
    if(isset($_SESSION["uni_empty"])){
      $uni_empty = $_SESSION["uni_empty"];

      echo $uni_empty;
    }
    unset($_SESSION["uni_empty"]);
}
function check_uniYear_empty()
{
    if(isset($_SESSION["uniYear_empty"])){
      $uniYear_empty = $_SESSION["uniYear_empty"];

      echo $uniYear_empty;
    }
    unset($_SESSION["uniYear_empty"]);
}


function check_jambScore_empty()
{
    if(isset($_SESSION["jambScore_empty"])){
      $jambScore_empty = $_SESSION["jambScore_empty"];

      echo $jambScore_empty;
    }
    unset($_SESSION["jambScore_empty"]);
}

function check_password1_empty()
{
    if(isset($_SESSION["password1_empty"])){
      $password1_empty = $_SESSION["password1_empty"];

      echo $password1_empty;
    }
    unset($_SESSION["password1_empty"]);
}

function check_password2_empty()
{
    if(isset($_SESSION["password2_empty"])){
      $password2_empty = $_SESSION["password2_empty"];

      echo $password2_empty;
    }
    unset($_SESSION["password2_empty"]);
}

// advance error's;
function check_jambreg_invalid()
{
   if(isset($_SESSION["jambReg_invalid"])){
    $jambReg_invalid = $_SESSION["jambReg_invalid"];

    echo $jambReg_invalid;
   }
   unset($_SESSION["jambReg_invalid"]);
}

function check_jambscore_invalid()
{
  if(isset($_SESSION["jambScore_invalid"])) {
     $jambScore_invalid = $_SESSION["jambScore_invalid"];

     echo $jambScore_invalid;
  }
  unset($_SESSION["jambScore_invalid"]);
}
function check_password_uppercase()
{
  if(isset($_SESSION["password_uppercase"])) {
     $password_uppercase = $_SESSION["password_uppercase"];

     echo $password_uppercase;
  }
  unset($_SESSION["password_uppercase"]);
}
function check_password_match()
{
  if(isset($_SESSION["password2_dotmatch"])) {
     $password2_dotmatch = $_SESSION["password2_dotmatch"];

     echo $password2_dotmatch;
  }
  unset($_SESSION["password2_dotmatch"]);
}
function check_user_taken()
{
    if(isset($_SESSION["user_taken"])) {
      $user_taken = $_SESSION["user_taken"];

      echo $user_taken;
    }
    unset($_SESSION["user_taken"]);
}
function check_email_taken()
{
    if(isset($_SESSION["email_taken"])) {
      $email_taken = $_SESSION["email_taken"];

      echo $email_taken;
    }
    unset($_SESSION["email_taken"]);
}
function signup_successfull()
{
   if(isset($_GET["signup"]) && $_GET["signup"] == "successfull") {

      // display signup sucessfull;
      echo "<br>";
      echo "        <div class='signbox'>
      <div class='sign_header'>
          Sign Up Successful
      </div>
      <div class='sign-up_paragh'>
          <p class='para'>Account has been created</p> <a href='login.php' class='sign-btn'>Login Now!</a>
          </div>
      </div>";
  }
}