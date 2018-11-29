<?php
session_start();
include 'database_connection.php';
include '../classes/user.php';

$user = new User($pdo);
$user->login($_POST["username"], $_POST["password"]);