<?php
declare(strict_types=1);

function update_user_acct(object $pdo, string $username, string $email, string $jambReg, string $uniChoice,
 string $jambYear, string $jambScore, string $result_username, int $result_id)
{
    update_user($pdo, $username, $email, $jambReg, $uniChoice, $jambYear, $jambScore, $result_username, $result_id);
}




