<?php

require_once "DB.php";

class User extends DB
{
    public function newUser(string $username, string $password): void
    {
        $user = $this->pdo->prepare("INSERT INTO users(username, password) VALUES(:username, :password)");

        $user->execute([
            ":username" => $username,
            ":password" => $password
        ]);
    }
}