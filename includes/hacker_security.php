<?php
declare(strict_types=1);

if(isset($_SESSION["res_id"])){
    $result['id'] = $_SESSION["res_id"];
}else{
    header("Location: ../signup.php");
    die("Please sign up/login to Myuniversity website appropriately");
}