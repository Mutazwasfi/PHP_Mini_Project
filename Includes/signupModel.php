<?php

declare(strict_types=1);

function get_username(object $pdo, string $fName, string $famName)
{
  $query = "SELECT fName, famName  FROM users WHERE fName = :fName , famName = :famName;";
  $stmt = $pdo->prepare($query);
  $stmt->bindparam(":fName" , $fName, ":famName", $famName);
  $stmt->excute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}