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
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    // required the files;
    try {
        require_once "db-connection.php";
        require_once "signup-model.php";
        require_once "signup-controller.php";

        

        // User input empty error's handling;
        if(is_all_empty($username, $email, $jambReg, $uniChoice, $jambYear, 
        $jambScore, $password1, $password2)) {

           
    
            if(is_username_empty($username)) {
               $username_empty = "Username is required!";
            }
            
            if(is_email_empty($email)) {
                $email_empty = "E-mail is required!";
            }
            if(is_jambReg_empty($jambReg)) {
                $jambReg_empty = "UTME/University Registration Number is required!";
            }
            if(is_uniChoice_empty($uniChoice)){
                $uni_empty = "Institution is required!";
            }
            if(is_jambYear_empty($jambYear)) {
                $uniYear_empty = "UTME Year is requied!";
            }
            
            if(is_jambScore_empty($jambScore)) {
                $jambScore_empty = "Jamb Point is required!";
            }
            
            if(is_password1_empty($password1)) {
                $password1_empty = "Password is required!";
            }
            
            if(is_password2_empty($password2)) {
                $password2_empty = "Comfirm password is required!";
            }  
            

                  // throw back previous data's;
                  $signupData = [
                    "username" => $username,
                    "email" => $email,
                    "jambReg" => $jambReg,
                    "uniChoice" => $uniChoice,
                    "jambYear" => $jambYear,
                    "jambScore" => $jambScore
                    
                        ];

            require_once "config_session-inc.php";
            
            $_SESSION["username_empty"] = $username_empty;
            $_SESSION["email_empty"] = $email_empty;
            $_SESSION["jambReg_empty"] = $jambReg_empty;
            $_SESSION["uni_empty"] = $uni_empty;
            $_SESSION["uniYear_empty"] = $uniYear_empty;
            $_SESSION["jambScore_empty"] = $jambScore_empty;
            $_SESSION["password1_empty"] = $password1_empty;
            $_SESSION["password2_empty"] = $password2_empty;
            //$_SESSION["signup_data"] = $signupData;

            header("Location: ../signup.php");
                die();

    
    
        } 
        if(is_all_notempty($username, $email, $jambReg, $uniChoice, $jambYear,
             $jambScore, $password1, $password2)) {

            // advance error's;
            if(user_space($username)) {
                $username_empty = "Username can only contain chart, space and uppercase!";
            }
            if(is_jambReg_invalid($jambReg)){
                $jambReg_empty = "Incorrect UTME/University Registration Number";
            }
            if(is_jambScore_invalid($jambScore)) {
                $jambScore_invalid = "Invalid Jamb score";
            }
            if(password_container_uppercase($password1)){
                $password_uppercase = "Password should contain at least one uppercase";
            } 
            if(is_passwords_match($password1, $password2)){
                $password2_dotmatch = "Password does not match";
            }
            if(is_user_taken($pdo, $username)) {
                $user_taken = "Sorry! Username has Already been taken!";
            }
            if(is_email_taken($pdo, $email)) {
                $email_taken = "E-mail has already been used!";
            }
            if(is_reg_taken($pdo, $jambReg)) {
                $jambReg_empty = "UTME/University Number has already been used!";
            }
        
            // if No error's create Acct;
           
        
                  // throw back previous data's;
            $signupData = [
                "username" => $username,
                "email" => $email,
                "jambReg" => $jambReg,
                "uniChoice" => $uniChoice,
                "jambYear" => $jambYear,
                "jambScore" => $jambScore
                
                    ];

                // if the user fill in all the field's;
                session_start();
                $_SESSION["username_empty"] = $username_empty;
                $_SESSION["jambReg_invalid"] = $jambReg_empty;
                $_SESSION["jambScore_invalid"] = $jambScore_invalid;
                $_SESSION["password2_empty"] = $password2_empty;
                $_SESSION["password_uppercase"] = $password_uppercase;
                $_SESSION["password2_dotmatch"] = $password2_dotmatch;
                $_SESSION["user_taken"] = $user_taken;
                $_SESSION["email_taken"] = $email_taken;
                $_SESSION["signup_data"] = $signupData;
                
                header("Location: ../signup.php");
                // if NO erro's process the account;
                if(!user_space($username) && !is_passwords_match($password1, $password2) && !is_jambReg_invalid($jambReg) && !is_jambScore_invalid($jambScore) && !password_container_uppercase($password1) && !is_user_taken($pdo, $username) && !is_email_taken($pdo, $email) && !is_reg_taken($pdo, $jambReg)) {
                    // finally create the account;
                    create_user_acct($pdo, $username, $email, $jambReg, $uniChoice, $jambYear, $jambScore, $password2);
                    $pdo = null;
                    $stmt = null;
                    unset($_SESSION["signup_data"]);
                    header("Location: ../signup.php?signup=successfull");
                    die();
                    }
                       die();
        
        }



    

        
    }catch (PDOException $e) {
        die("Query failed:" .$e->message());
        }
    

} else{
   // get back to sign up page;
   header("Location: ../signup.php"); 
   die();
}