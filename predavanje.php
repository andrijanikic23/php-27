<?php

$name = "Andrija";
$password = "fezr39827fuhjewewfjw";

$baza = mysqli_connect("localhost", "root", "", "php-27");
//$baza->query("INSERT INTO users (username, password) VALUES ('$name', '$password')");

$pdo = new PDO("mysql:host=localhost;dbname=php-27", "root", "");

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES(:name, :password)");

$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
//$stmt->execute();

//$stmt->execute([
//    ":name" => $name,
//    ":password" => $password
//]);

$stmt2 = $pdo->prepare("SELECT * FROM users WHERE username=:name");
$stmt2->bindParam(":name", $name);
$stmt2->execute();

if($stmt2->rowCount() < 5) {
    echo "Imamo manje od 5 rezultata";
}

$users = $stmt2->fetch();

var_dump($users);