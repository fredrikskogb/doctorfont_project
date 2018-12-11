<?php

$number_of_comments = new Comment($pdo);
$number_of_comments->getComment($post["id"]);
$number_of_comments = $number_of_comments->fetched_comments;
echo count($number_of_comments);
