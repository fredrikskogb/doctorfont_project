<?php

include 'database_connection.php';
include '../classes/post.php';

if($_POST['title'] === "" || $_POST['description'] === ""){
    header("Location: ../views/create_post_view.php");
}else{
    $create_post = new Post($pdo); 
    $create_post->create($_POST['title'], $_FILES['image'], $_POST['description'], $_POST['category']);
    header("Location: ../index.php");
}
