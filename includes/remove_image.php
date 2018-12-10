<?php

include 'database_connection.php';
include '../classes/post.php';


$delete_image = new Post($pdo); 
$delete_image->deleteImage($_GET["remove_image"]);