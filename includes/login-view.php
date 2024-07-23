<?php

function signup_input_email() 
{
  if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["email_empty"])) {

    // thowback the valid user input['username']
   echo '<input type="email" name="email" value="' . $_SESSION["signup_data"]["email"] . '">';
   
} else {
    // echo a new form to fill
    echo '<input type="email" name="email">';
    } 
    unset($_SESSION["signup_data"]);
}

function check_email_empty()
{
    if(isset($_SESSION["email_empty"])){
      $email_empty = $_SESSION["email_empty"];

      echo $email_empty;
    }
    unset($_SESSION["email_empty"]);
}
function check_password_empty()
{
    if(isset($_SESSION["password2_empty"])){
      $password2_empty = $_SESSION["password2_empty"];

      echo $password2_empty;
    }
    unset($_SESSION["password2_empty"]);
}
