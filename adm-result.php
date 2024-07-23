<?php
require_once "includes/config_session-inc.php";
if(isset($_SESSION["res_id"])){
    // our data's to determine the admission possibility;
    $res_username = $_SESSION["res_username"];
    $res_universitychoice = $_SESSION["res_uniChoice"];
    $res_jambscore = $_SESSION["res_jambScore"];

    if($res_universitychoice == "Bayero University, Kano(BUK)") {
      
    }


} else{
    header("Location: homepage.php?edit=0");
    die();
}