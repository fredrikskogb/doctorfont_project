<div class="single_comment_container">
<?php
foreach($comment->fetched_comments as $single_fetched_comment){
    ?><div class="single_comment"><?php
    echo $single_fetched_comment['username'] . "<br />";

    echo $single_fetched_comment['content'] . "</p>";
    ?><p class="delete_comment_button">DELETE [X]</p> <?php
    
    ?></div><?php
    echo "<hr>";
}

?>
</div>