<?php

declare(strict_types=1);

include_once 'signup.php';

// CHECKING IF ANY OF THE FIELDS ARE EMPTY
function is_input_empty(array $inputs) {
  foreach ($inputs as $value) {
    if (empty($value)) {
      return true;
    } else {
      return false;
    }
  }
}

// CHECKING IF THE EMAIL IS VAILD
function is_email_invaild(string $email) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
  } else {
    return false;
  }
}


// CHECKING IF THE USER EXISTS
function is_username_taken(object $pdo, string $fName, string $famName){
  if (get_username($pdo, $fName, $famName)){
    return true;
  } else {
    return false;
  }
}
