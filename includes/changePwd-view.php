<?php
function pwd_error()
{
    if(isset($_SESSION["pwd_error"])) {
        $pwdError = $_SESSION["pwd_error"];
        echo $pwdError;
    }
    unset($_SESSION["pwd_error"]);
}
function conError()
{
    if(isset($_SESSION["conError"])) {
      $conError = $_SESSION["conError"];

      echo $conError;
    }
    unset($_SESSION["conError"]);
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