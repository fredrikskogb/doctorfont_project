<?php
include 'database_connection.php';
include '../classes/post.php';

if($_POST["delete"] != $_GET['remove_image']){
    $edit_post = new Post($pdo);
    $edit_post->update($_POST["title"], $_FILES["image"], $_POST["description"], $_POST["category"], $_SESSION["user_id"], $_POST["id"]);
    header("Location: ../index.php");
}else{
    $edit_post = new Post($pdo);
    $edit_post->update($_POST["title"], $_FILES["image"], $_POST["description"], $_POST["category"], $_SESSION["user_id"], $_POST["id"]);
    include "remove_image.php";
    header("Location: ../index.php");
}

