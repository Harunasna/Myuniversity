<?php
declare(strict_types=1);

if(isset($_SESSION["res_id"])){
    $result['id'] = $_SESSION["res_id"];
}else{
    $error_message = "Your login session has expired please re-login.";
    die($error_message);
}