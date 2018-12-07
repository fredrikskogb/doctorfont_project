<?php
include 'databease_connection.php';
include '../classes/comment.php';

$delete_comment = new Comment($pdo);
$delete_comment->deleteComment($single_fetched_comment['id'], $user);

header ('Location: ../views/comment_view.php');