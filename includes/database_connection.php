<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$pdo = new PDO(
    "mysql:host=localhost;dbname=doctorfont;charset=utf8",
    "root",
    "root"
);