<div class="single_comment_container">
<?php
foreach($comment->fetched_comments as $single_fetched_comment){
    ?><div class="single_comment"><?php
    echo $single_fetched_comment['username'] . "<br />";

    echo $single_fetched_comment['content'] . "</p>";
    ?><a href="#"><img src="../images/cross_icon.png" alt="Delete comment" class="delete_comment_button"></a> <?php
    
    ?></div><?php
    echo "<hr>";
}

?>
</div>