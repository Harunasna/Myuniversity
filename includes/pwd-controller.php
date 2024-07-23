<?php
function wrong_pwd(string $user_pwd, string $old_pwd)
{
    if($user_pwd !== $old_pwd) {
        return true;
     }else{
        return false;
     }
}
function correct_pwd(string $new_pwd, string $con_pwd)
{
    if($new_pwd == $con_pwd) {
       return true;
    }else{
       return false;
    }
}
function changepwd(object $pdo, string $con_pwd,  string $result_username, int $result_id)
{
   changepwd_user($pdo, $con_pwd, $result_username, $result_id);
}