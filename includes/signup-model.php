<?php
declare(strict_types=1);

function get_user(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_user_email(object $pdo, string $email)
{
    $query = "SELECT username FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_user_reg(object $pdo, string $jambReg)
{
    $query = "SELECT username FROM users WHERE jamb_reg = :jambReg;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":jambReg", $jambReg);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}



function set_user(object $pdo, string $username, string $email, string $jambReg, string $uniChoice,
 string $jambYear, string $jambScore, string $password2
) 
{

    $query = "INSERT INTO users (username, email, jamb_reg, uni_choice, jamb_year,
    jamb_score, pwd) VALUES (:username, :email, :jambReg, :uniChoice, :jambYear, :jambScore, :password2 )";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":jambReg", $jambReg);
    $stmt->bindParam(":uniChoice", $uniChoice);
    $stmt->bindParam(":jambYear", $jambYear);
    $stmt->bindParam(":jambScore", $jambScore);
    $stmt->bindParam(":password2", $password2);

    $stmt->execute();

} 