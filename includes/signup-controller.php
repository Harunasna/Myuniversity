<?php
declare(strict_types=1);

// MAIN CONTROL PANEL ERROR'S HANDLE'S;
// input empty's;
function is_all_empty($username, $email, $jambReg, $uniChoice, $jambYear, $jambScore, $password1, $password2)
{
    if((empty($username) || empty($email) || empty($jambReg) || empty($uniChoice) || empty($jambYear) ||
    empty($jambScore) || empty($password1) || empty($password2))) {
        return true;
    } else{
        return false;
    }
}
function is_username_empty(string $username)
{
    if(empty($username)) {
        return true;
    } else{
        return false;
    }
}

function is_email_empty(string $email)
{
    if(empty($email)) {
        return true;
    } else{
        return false;
    }

}
function is_jambReg_empty(string $jambReg)
{
    if(empty($jambReg)) {
        return true;
    } else{
        return false;
    }
    
}
function is_uniChoice_empty(string $uniChoice)
{
    if(empty($uniChoice)) {
        return true;
    } else{
        return false;
    }
}

function is_jambYear_empty(string $jambYear)
{
    if(empty($jambYear)) {

        return true;
    } else{

        return false;
    }
}
function is_jambScore_empty(string $jambScore)
{
    if(empty($jambScore)) {
        return true;
    } else{
        return false;
    }
}
function is_password1_empty(string $password1)
{
    if(empty($password1)) {
        return true;
    } else{
        return false;
    }
}

function is_password2_empty(string $password2)
{
    if(empty($password2)) {
        return true;
    } else{
        return false;
    }
}
function is_all_notempty($username, $email, $jambReg, $uniChoice, $jambYear, $jambScore, $password1, $password2)
{
    if((!empty($username) && !empty($email) && !empty($jambReg) && !empty($uniChoice) && !empty($jambYear) &&
    !empty($jambScore) && !empty($password1) && !empty($password2))) {
        return true;
    } else{
        return false;
    }
}


// advance error's;
function user_space(string $username)
{
    $pattern = '/^(?=.*[a-z ]{2})(?=.*[A-Z]{0}).*$/'; 

    if (!preg_match($pattern, $username)){
        return true;
    } else{
        return false;
    }
}
function is_emailInvalid(string $email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        return true;  
    } else{
      
       return false;
    }
}

function is_jambReg_invalid(string $jambReg)
{   
     $pattern = '/^(?=.*[0-9]{2})(?=.*[A-Z]{2}).*$/';
    if (!preg_match($pattern, $jambReg)) {
        return true;
    } else{
        return false;
    }
}



function is_jambScore_invalid(string $jambScore)
{
        // Check if the JAMB score is a three-digit number
        if (!preg_match('/^[0-9]{3}$/', $jambScore)) {
            return true;
        }
    
        // Check if the JAMB score is in the range of 001 to 400
        $jambScoreInt = intval($jambScore);
        if ($jambScoreInt < 1 || $jambScoreInt > 400) {
            return true;
        }
    
        // If the JAMB score is a three-digit number and in the range of 001 to 400, it is valid
        else { return false;
        }
}

function password_container_uppercase(string $password1)
{   
    $pattern = '/^(?=.*[a-z | 0-9]{2})(?=.*[A-Z]{1}).*$/'; 
    if(!preg_match($pattern, $password1)) {
        return true;
    } else{
        return false;
    }
}

function is_passwords_match(string $password1, string $password2)
{
    $pattern = '/^(?=.*[a-z ]{2})(?=.*[A-Z]{1}).*$/'; 
    preg_match($pattern, $password1);
    preg_match($pattern, $password2);

    if($password1 !== $password2) {
        return true;
    } else{
        return false;
    }
}
function is_user_taken(object $pdo, string $username)
{
    if(get_user($pdo, $username)) {
        return true;
    } else{
        return false;
    }
}
function is_email_taken(object $pdo, string $email)
{
    if(get_user_email($pdo, $email)){
        return true;
    } else{
        return false;
        
    }
}
function is_reg_taken(object $pdo, string $jambReg)
{
    if(get_user_reg($pdo, $jambReg)){
        return true;
    } else{
        return false;
        
    }
}

function create_user_acct(object $pdo, string $username, string $email, string $jambReg, string $uniChoice,
 string $jambYear, string $jambScore, string $password2)
{
    set_user($pdo, $username, $email, $jambReg, $uniChoice, $jambYear, $jambScore, $password2);  
}




