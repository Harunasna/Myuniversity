<?php
declare(strict_types=1);

/*function update_user(object $pdo, string $username, string $email, string $jambReg, string $uniChoice,
 string $jambYear, string $jambScore, int $result_id) 
{
    $query = "UPDATE users SET username = ':username', email = ':email', jamb_reg = ':jambReg',
    uni_choice = ':uniChoice', jamb_year = ':jambYear', jamb_score = ':jambScore' WHERE id = ':resultId';";
    
     $stmt = $pdo->prepare($query);
     $stmt->bindParam(":username", $username);
     $stmt->bindParam(":email", $email);
     $stmt->bindParam(":jambReg", $jambReg);
     $stmt->bindParam(":uniChoice", $uniChoice);
     $stmt->bindParam(":jambYear", $jambYear);
     $stmt->bindParam(":jambScore", $jambScore);
     $stmt->bindParam(":resultId", $result_id);

     $stmt->execute();
} 
$_SESSION["res_username"]
*/
function update_user(object $pdo, string $username, string $email, string $jambReg, string $uniChoice, string $jambYear, string $jambScore, string $result_username, int $result_id)
{
    $query = "UPDATE users SET
                  username = :username,
                  email = :email,
                  jamb_reg = :jamb_reg,
                  uni_choice = :uni_choice,
                  jamb_year = :jamb_year,
                  jamb_score = :jamb_score
                  WHERE 
                  id = :result_id AND username = :result_username;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":jamb_reg", $jambReg);
    $stmt->bindParam(":uni_choice", $uniChoice);
    $stmt->bindParam(":jamb_year", $jambYear);
    $stmt->bindParam(":jamb_score", $jambScore);
    $stmt->bindParam(":result_username", $result_username);
    $stmt->bindParam(":result_id", $result_id);

    $stmt->execute();
}