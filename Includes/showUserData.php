<?php

require_once 'dbhandler.php';

function get_user_info(object $pdo, string $email) {
  $query ="SELECT * FROM users WHERE email = :email; ";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":email", $email);
  $stmt-> execute();

  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  header("Location: ../home.php?data=" . json_encode($rows));
  $stmt->close();
}
