<?php

declare(strict_types=1);

function get_username(object $pdo, string $phoneNumber)
{
  $query = "SELECT fName, famName  FROM users WHERE phoneNumber = :phoneNumber;";
  $stmt = $pdo->prepare($query);
  $stmt->bindparam(":phoneNumber" , $phoneNumber);
  $stmt-> execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function get_email(object $pdo, string $email) {
  $query = "SELECT fName FROM users WHERE email = :email;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":email", $email);
  $stmt-> execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function set_user (
  object $pdo, string $fName, string $mName,
  string $lName, string $famName, 
  string $email, string $pwd, string $confirmPwd, 
  string $phoneNumber, String $birthDate) {

  $query = "INSERT INTO users (fName, mName, lName, famName, email, pwd, 
  confirmPwd, phoneNumber, birthDate) VALUES (:fName, 
  :mName, :lName, :famName, :email, :pwd, 
  :confirmPwd, :phoneNumber, :birthDate);";
  $stmt = $pdo->prepare($query);

  $options =[
    'cost'=>12
  ];

  $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

  $stmt->bindParam(":fName", $fName);
  $stmt->bindParam(":mName", $mName);
  $stmt->bindParam(":lName", $lName);
  $stmt->bindParam(":famName", $famName);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":pwd", $hashedPwd);
  $stmt->bindParam(":confirmPwd", $confirmPwd);
  $stmt->bindParam(":phoneNumber", $phoneNumber);
  $stmt->bindParam(":birthDate", $birthDate);
  $stmt-> execute();

  }