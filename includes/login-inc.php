<?php
declare(strict_types=1);
// grab user input data's;
if($_SERVER["REQUEST_METHOD"] === "POST") {

    $email =  htmlspecialchars($_POST["email"]);
    $password2 =  htmlspecialchars($_POST["password"]);

    // required the files;
    try {
        require_once "db-connection.php";
        require_once "login-model.php";
        require_once "login-controller.php";

        

        // User input empty error's handling;
        if(is_all_empty($email, $password2)) {

           
            if(is_email_empty($email)) {
                $email_empty = "E-mail is required!";
            }
            if(is_password_empty($password2)) {
                $password_empty = "password is required!";
            }  
            require_once "config_session-inc.php";

            $_SESSION["email_empty"] = $email_empty;
            $_SESSION["password2_empty"] = $password_empty;

            header("Location: ../login.php");
                die();
        } 
        // advance error's;
        if(is_all_notempty($email, $password2)) {
            $result = get_user($pdo, $email);
            $res_email = $result['email'];
            $res_pwd = $result['pwd'];
            
            require_once "config_session-inc.php";
            if(is_email_wrong($result)){
                $email_empty = "This e-mail don't exist!";
        
            }
            if(!is_email_wrong($result) && $password2 != $res_pwd){
                $password_empty = "password incorrect!";

            }

            $_SESSION["email_empty"] = $email_empty;
            $_SESSION["password2_empty"] = $password_empty;
            header("Location: ../login.php");
            
          // if no error's process the login page;
            if(!is_email_wrong($result) &&  $password2 == $res_pwd){
                $_SESSION["res_id"] = $result['id'];
                $_SESSION["res_username"] = $result['username'];
                $_SESSION["res_email"] = $result['email'];
                $_SESSION["res_jambReg"] = $result['jamb_reg'];
                $_SESSION["res_uniChoice"] = $result['uni_choice'];
                $_SESSION["res_jambYear"] = $result['jamb_year'];
                $_SESSION["res_jambScore"] = $result['jamb_score'];
                $_SESSION["res_pwd"] = $result['pwd'];
               
                $pdo = null;
                $stmt = null;
                header("Location: ../homepage.php?edit=0");
                die();
            }
           
            
        }
        
    }catch (PDOException $e) {
        die("Query failed:" .$e->message());
        }
    

} else{
   // get back to sign up page;
   header("Location: ../signup.php"); 
   die();
}