<?php

include 'database_connection.php';
include '../classes/comment.php';

$create_post = new Comment($pdo);


$create_post->create($_POST['description'], $_POST['post_id'], $_POST['created_by']);

header ("Location: ../views/comment_view.php?post=". $_POST['post_id']);