<?php

include 'database_connection.php';
<<<<<<< HEAD
include '../classes/post.php';
=======
include '../classes/post.php';

$create_post = new Post($pdo); 

$create_post->create($_POST['title'], $_FILES['image'], $_POST['description'], $_POST['category']);
>>>>>>> master
