<?php
include '../includes/database_connection.php';
include '../classes/comment.php';

$delete_comment = new Comment($pdo);
$delete_comment->deleteComment($_POST['comment_id']);

//header ('Location: ../views/comment_view.php?post=' . <?=$_POST['post_id']

header ('Location: ../views/comment_view.php?post=' . $_POST['post_id']);