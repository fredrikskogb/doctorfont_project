<?php
/* Calls the delete method in Post-class
 * To remove post with ID 
 * From foreach-loop on index.php
*/
include 'database_connection.php';
include '../classes/post.php';

$post = new Post($pdo);
$post->delete($_GET["remove_post"]);