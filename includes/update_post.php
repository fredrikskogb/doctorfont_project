<?php
include 'database_connection.php';
include '../classes/post.php';

$edit_post = new Post($pdo);
$edit_post->update($_POST["title"], $_FILES["image"], $_POST["description"], $_POST["category"], $_SESSION["user_id"], $_POST["id"]);

