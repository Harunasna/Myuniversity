<?php
declare(strict_types=1);

if(isset($_SESSION["res_id"])){

unset($_SESSION["res_id"]);
unset($_SESSION["res_username"]);
unset($_SESSION["res_email"]);
unset($_SESSION["res_jambReg"]);
unset($_SESSION["res_uniChoice"]);
unset($_SESSION["res_jambYear"]);
unset($_SESSION["res_jambScore"]);
$pdo = null;
$stmt = null;

}