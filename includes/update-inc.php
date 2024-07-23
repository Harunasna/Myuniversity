<?php
declare(strict_types=1);
// grab user input data's;
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $jambReg = $_POST["jambReg"];
    $uniChoice = $_POST["uniChoice"];
    $jambYear = $_POST["jambYear"];
    $jambScore = $_POST["jambScore"];
    
    require_once "db-connection.php";
    require_once "update-model.php";
    require_once "update-controller.php";


    require_once "config_session-inc.php";
    if(isset($_SESSION["res_id"])){
      $result_id = $_SESSION["res_id"];
      $result_username = $_SESSION["res_username"];

      update_user_acct($pdo, $username, $email, $jambReg, $uniChoice, $jambYear, $jambScore, $result_username, $result_id);
      header("Location: ../homepage.php?edit=successfull");
      die();
    }else{
    $error_message = "The script encountered an error please re-login.";
    die($error_message);
    }
}else{
    header("Location: ../signup.php"); 
   die();
}