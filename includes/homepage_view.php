<?php
function result_username()
{
    if(isset($_SESSION["res_username"])){
     $result['username'] = $_SESSION["res_username"];

      echo $result['username'];
    }

}

function result_email()
{
    if(isset($_SESSION["res_email"])){
     $result['email'] = $_SESSION["res_email"];

      echo $result['email'];
    }

}

function res_jambReg()
{
    if(isset($_SESSION["res_jambReg"])){
     $result['jamb_reg'] = $_SESSION["res_jambReg"];

      echo $result['jamb_reg'];
    }

}

function res_uniChoice()
{
    if(isset($_SESSION["res_uniChoice"])){
     $result['uni_choice'] = $_SESSION["res_uniChoice"];

      echo $result['uni_choice'];
    }

}

function res_jambYear()
{
    if(isset($_SESSION["res_jambYear"])){
     $result['jamb_year'] = $_SESSION["res_jambYear"];

      echo $result['jamb_year'];
    }

}

function res_jambScore()
{
    if(isset($_SESSION["res_jambScore"])){
     $result['jamb_score'] = $_SESSION["res_jambScore"];

      echo $result['jamb_score'];
    }

}


function edit_successfull()
{
   if(isset($_SESSION["res_email"]) && $_GET["edit"] == "successfull") {

      // display signup sucessfull;
      echo "<br>";
      echo "<div class='signbox'>
      <div class='sign_header'>
          Profile Updated
      </div>
      <div class='sign-up_paragh'>
          <p class='para'>Account Info has been Updated! please!</p> <a href='login.php' class='sign-btn'>Log Out!</a>
      </div>
  </div> ";
    }elseif(isset($_SESSION["res_email"]) && $_GET["edit"] == "password") {
        // display signup sucessfull;
        echo "<br>";
        echo "<div class='signbox'>
        <div class='sign_header'>
            Password Changed
        </div>
        <div class='sign-up_paragh'>
            <p class='para'>Account password has been changed please!</p> <a href='login.php' class='sign-btn'>Log Out!</a>
        </div>
    </div> ";
    }else{
    $_GET["edit"] = 0;
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