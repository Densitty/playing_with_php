<?php
const USERNAME = "root";
const PASSWORD = "";


try {
  $pdo = new PDO("mysql:dbname=rick_masterclass;host:127.0.0.1", USERNAME, PASSWORD);

  /* $rows = $pdo->exec("DELETE FROM students WHERE id=6");
  if ($rows === false) {
    echo "Deletion failed";
  } else {
    echo "Rows affected: " . $rows;
  } */

  $prepared = $pdo->prepare("DELETE FROM students WHERE name= :name ");
  $success = $prepared->execute([
    ":name" => $_GET['name'],

  ]);
} catch (PDOException $e) {
  echo $e->getMessage();
}