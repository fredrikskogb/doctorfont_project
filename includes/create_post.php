<?php

include 'database_connection.php';
include '../classes/post.php';

$create_post = new Post($pdo); 

$create_post->create($_POST['title'], $_FILES['image'], $_POST['description'], $_POST['category']);

$image = $_FILES['image'];
$image["type"];


if($_POST['title'] === "" || $image["type"] === "" || $_POST['description'] === ""){
    header("Location: ../views/create_post_view.php");
}else{
    header("Location: ../index.php");
}
