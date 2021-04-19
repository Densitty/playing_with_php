<?php
const USERNAME = "root";
const PASSWORD = "";
$pdo = new PDO("mysql:dbname=rick_masterclass;host:127.0.0.1", USERNAME, PASSWORD);
$rows = $pdo->query("SELECT * FROM students");

/* foreach ($rows as $row) {
  echo $row["name"] . " scored " . $row["grade"] . " in this course ";
  echo "\n";
} */

// $data = $rows->fetchAll();
// var_dump($data);
// print_r($data[1]);
// foreach ($data as $user) {
//   echo $user["name"] . " scored " . $user["grade"] . " points.\n";
// }

$prepared = $pdo->prepare("SELECT * FROM students WHERE `name`= :name ");
$users = $prepared->execute([
  ':name' => "Frank",
]);

echo $users ? "Selection succeeded\n" : "Selection failed\n";

while ($row = $prepared->fetch()) {
  // print_r($row);
  echo $row["name"] . " scored " . $row["grade"] . " in the test.";
}

// or use the foreach method below to fetch the data

/* $users = $prepared->fetchAll();

foreach ($users as $user) {
  echo $user["name"] . " scored " . $user["grade"] . " points.\n";
} */