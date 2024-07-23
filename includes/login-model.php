<?php
declare(strict_types=1);

// Select ALL information from the database WERE 'username' IS EQUAL TO  $username;
function get_user (object $pdo, string $email)
{
    $query = "SELECT * FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    
}