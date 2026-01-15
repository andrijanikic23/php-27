<?php


class DB
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=php-27', 'root', '');
    }

}