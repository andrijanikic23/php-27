<?php

require_once "models/User.php";


$newEntry = new User();
$newEntry->newUser($_POST['username'], $_POST['password']);