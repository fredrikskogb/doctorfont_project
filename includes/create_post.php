<?php

include 'database_connection.php';
include '../classes/post.php';

$create_post = new Post($pdo); 

$create_post->create($_POST['title'], $_FILES['image'], $_POST['description'], $_POST['category']);


if($_POST['title'] === "" || $_POST['description'] === ""){
    header("Location: ../views/create_post_view.php");
}else{
    header("Location: ../index.php");
}
