<div class="single_comment_container">
<?php
foreach($comment->fetched_comments as $single_fetched_comment){
    ?><div class="single_comment"><?php
    echo $single_fetched_comment['username'] . "<br />";

    echo $single_fetched_comment['content'] . "</p>";
    ?><a href="../includes/delete_comment.php"><img src="../images/cross_icon.png" alt="Delete comment" class="delete_comment_button"></a> <?php
    var_dump($fetched_comments);
    ?></div><?php
    echo "<hr>";
}

?>
</div>