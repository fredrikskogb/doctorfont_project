<div class="single_comment_container">
<?php
foreach($comment->fetched_comments as $single_fetched_comment){
    ?><div class="single_comment"><?php
    echo $single_fetched_comment['username'] . "<br />";

    echo $single_fetched_comment['content'] . "</p>";
    ?>
    <form action="../includes/delete_comment.php" method="POST">
        <input type="image" src="../images/cross_icon.png" alt="Submit form" class="delete_comment_button" />
        <input type="hidden" name="comment_id" value="<?=$single_fetched_comment['id']?>">
        <input type="hidden" name="post_id" value="<?=$single_fetched_comment['post_id']?>">
    </form>
    
    </div><?php
    echo "<hr>";
}

?>
</div>