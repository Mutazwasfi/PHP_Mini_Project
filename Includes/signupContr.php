<?php

declare(strict_types=1);

include_once 'signup.php';

// CHECKING IF ANY OF THE FIELDS ARE EMPTY
function is_input_empty(array $inputs) {
  foreach ($inputs as $value) {
    $allNotEmpty = true;
    if (empty($value)) {
      $allNotEmpty = false;
      break;
    } 
  }
  return $allNotEmpty;
}

// CHECKING IF THE EMAIL IS VAILD
function is_email_invaild(string $email) 
{
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
  } else {
    return false;
  }
}


// CHECKING IF THE USER EXISTS
function is_username_taken(object $pdo, string $phoneNumber)
{
  if (get_username($pdo, $phoneNumber)){
    return true;
  } else {
    return false;
  }
}

// CHECKING IF THE email IS ALREADY REGISTERED
function is_email_registeried(object $pdo, string $email)
{
  if (get_email($pdo, $email)){
    return true;
  } else {
    return false;
  }
}

// CREATING A USER
function create_user (
  object $pdo, string $fName, string $mName,
  string $lName, string $famName, 
  string $email, string $pwd, string $confirmPwd, 
  string $phoneNumber, String $birthDate)
{
  set_user($pdo, $fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $phoneNumber, $birthDate);
}
