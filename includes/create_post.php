<?php

include 'database_connection.php';
include '../classes/post.php';

//Check if all requirements are met when creating post

if($_POST['title'] === "" || $_POST['description'] === ""){
    if(strlen($_POST["title"]) < 1){
        $_SESSION['title'] = false;
    }
    if(strlen($_POST["description"]) < 1){
        $_SESSION['description'] = false;
    }
    header("Location: ../views/create_post_view.php");
}else{
    $create_post = new Post($pdo); 
    $create_post->create($_POST['title'], $_FILES['image'], $_POST['description'], $_POST['category']);
    header("Location: ../index.php");
}
