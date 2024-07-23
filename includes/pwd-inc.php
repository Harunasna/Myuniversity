<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $old_pwd = $_POST["old_pwd"];
    $new_pwd = $_POST["new_pwd"];
    $con_pwd = $_POST["con_pwd"];

    require_once "db-connection.php";
    require_once "pwd-model.php";
    require_once "pwd-controller.php";
     // start error's;
    require_once "config_session-inc.php";
    
    $user_pwd = $_SESSION["res_pwd"];
    if(wrong_pwd($user_pwd, $old_pwd)){
        $pwdError = "Incorrect Password!";
    }
    if(!correct_pwd($new_pwd, $con_pwd)) {
        $conError = "Password does not match!";
     }
    session_start();
    $_SESSION["pwd_error"] = $pwdError;
    $_SESSION["conError"] = $conError;
    header("Location: ../change_pwd.php"); 
    require_once "config_session-inc.php";
    if(correct_pwd($new_pwd, $con_pwd) && !wrong_pwd($user_pwd, $old_pwd)) {
        $result_id = $_SESSION["res_id"];
        $result_username = $_SESSION["res_username"];
        changepwd($pdo, $con_pwd, $result_username, $result_id);
        header("Location: ../homepage.php?edit=password");
        die();
    }
    
    
}else{
    header("Location: ../signup.php"); 
    die(); 
}