<?php
function changepwd_user(object $pdo, string $con_pwd,  string $result_username, int $result_id)
{
    $query = "UPDATE users SET
                  pwd = :con_pwd WHERE 
                  id = :result_id AND username = :result_username;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":con_pwd", $con_pwd);
    $stmt->bindParam(":result_username", $result_username);
    $stmt->bindParam(":result_id", $result_id);

    $stmt->execute();
}