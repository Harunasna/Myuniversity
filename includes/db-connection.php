<?php
declare(strict_types=1);
// LINK the DATABASE TABLE;
$host = 'sql112.infinityfree.com';
$dbname = 'if0_36472055_myuniversity';
$dbusername = 'if0_36472055';
$dbpassword = 'kWMwbvWu5Ng2Ic';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("connection to database failed:" . $e->getMessage());
}