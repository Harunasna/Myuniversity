<?php
declare(strict_types=1);

// MAIN CONTROL PANEL ERROR'S HANDLE'S;
// input empty's;
function is_all_empty($email, $password2)
{
    if(empty($email) || empty($password2)) {
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
function is_password_empty(string $password2)
{
    if(empty($password2)) {
        return true;
    } else{
        return false;
    }
}
function is_all_notempty($email, $password2)
{
    if((!empty($email) && !empty($password2))) {
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
// advace error's;
function is_email_wrong(array|bool $result)
{
 
  if(!$result) {
    return true;
  } else{
    return false;
  }
}
