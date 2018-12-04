<div class="single_comment">
<?php
foreach($comment->fetched_comments as $single_fetched_comment){

    echo $_SESSION['username'] . "<br />";

    echo $single_fetched_comment['content'];

    echo "<hr>";
}

?>
</div>