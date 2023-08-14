<?php

declare(strict_types=1);

// $fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $birthDate

function is_Input_Empty($fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $birthDate)
{
    if (empty(fName) || empty($email) || empty($pwd) || empty($confirmPwd) || empty($birthDate)) {
        return true;
    } else {
        return false;
    }

}

