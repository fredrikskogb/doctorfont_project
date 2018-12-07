<?php

$delete_image = new Post($pdo); 
$delete_image->deleteImage($_GET["remove_image"]);