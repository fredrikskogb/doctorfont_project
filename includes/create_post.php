<?php

include 'database_connection.php';
include '../classes/post.php';

$create_post = new User($pdo); 

$create_post->create($_POST['title'], $_FILE['image'], $_POST['description'], $_POST['category']);