<?php

const USERNAME = "root";
const PASSWORD = "";
try {
  $pdo = new PDO("mysql:dbname=rick_masterclass;host:127.0.0.1", USERNAME, PASSWORD);

  $prepared = $pdo->prepare("UPDATE students SET `grade`= :grade WHERE `name`= :name LIMIT 1");

  $success = $prepared->execute([
    ":name" => "Karleb",
    ":grade" => 92,
  ]);

  echo $success ? "Update succeeded.\n" : "Update failed. \n";

  /* $rowsAffected = $pdo->exec("UPDATE students SET `grade`=72 WHERE `name`='Frank' ");

  if ($rowsAffected === false) {
    echo "Update failed";
  } else {
    echo "Rows affected: " . $rowsAffected;
  } */
} catch (PDOException $e) {
  echo $e->getMessage();
}