<?php
include 'database_connection.php';
include '../classes/post.php';
$placeholder = $_FILES["image"];


if($_POST['title'] === "" || $_POST['description'] === ""){
    if(strlen($_POST["title"]) < 1){
        $_SESSION['title'] = false;
    }
    if(strlen($_POST["description"]) < 1){
        $_SESSION['description'] = false;
    }
    header("Location: ../views/create_post_view.php");
}else{
    if($placeholder["tmp_name"] === ""){
        $edit_post = new Post($pdo);
        $edit_post->updateKeepImage($_POST["title"], $_POST["description"], $_POST["category"], $_SESSION["user_id"], $_POST["id"]);
        header("Location: ../index.php");
    }else{
        $edit_post = new Post($pdo);
        $edit_post->update($_POST["title"], $_FILES["image"], $_POST["description"], $_POST["category"], $_SESSION["user_id"], $_POST["id"]);
        header("Location: ../index.php");
    }
}