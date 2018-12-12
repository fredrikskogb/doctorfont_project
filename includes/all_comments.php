<div class="single_comment_container" id="comment">

    <?php
        foreach($comment->fetched_comments as $single_fetched_comment){
            ?><div class="single_comment">

            <div>
                <p class="comment_info"><?=$single_fetched_comment['username']?></p>
                <p class="comment_info" id="comment_date"><?=substr($single_fetched_comment['date'], 0, -3)?></p>
                <p class="comment_info"><?=$single_fetched_comment['content']?></p>
            </div>

            <?php
                if ($single_fetched_comment['user_id'] == $_SESSION['user_id'] || $_SESSION['is_admin']) {
            ?>
            
            <form action="../includes/delete_comment.php" method="POST">
                <input type="image" src="../images/cross_icon.png" alt="Submit form" class="delete_comment_button" />
                <input type="hidden" name="comment_id" value="<?=$single_fetched_comment['id']?>">
                <input type="hidden" name="post_id" value="<?=$single_fetched_comment['post_id']?>">
            </form>

            <?php
            }?>
            
            </div><?php
            echo "<hr>";
        }

    ?>
</div>