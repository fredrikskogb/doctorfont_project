<?php
session_start();
$pdo = new PDO(
    "mysql:host=localhost;dbname=doctorfont;charset=utf8",
    "root",
    "root"
);