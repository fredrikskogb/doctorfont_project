<?php
include 'database_connection.php';
include '../classes/post.php';

$post = new Post($pdo);
$post->delete($_GET["remove_post"]);

