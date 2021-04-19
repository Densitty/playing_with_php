<?php

const USERNAME = "root";
const PASSWORD = "";
try {
  $pdo = new PDO("mysql:dbname=rick_masterclass;host:127.0.0.1", USERNAME, PASSWORD);
  // $rowsAffected = $pdo->exec("INSERT INTO students(`name`, `grade`) VALUES ('Kendrick', 45)");

  $prepared = $pdo->prepare("INSERT INTO students(`name`, `grade`) VALUES (:name, :grade)");

  $success = $prepared->execute([
    ":name" => "Karleb",
    ":grade" => 91,
  ]);

  echo $success ? "Insertion succeeded" : "Insertion failed. \n";
} catch (PDOException $e) {
  echo $e->getMessage();
}