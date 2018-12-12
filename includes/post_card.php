<?php
    $image = substr($post['image'], 3);
    $date = substr($post['date'], 0, -3);
?>

<div class="post_card">
    
    <h2 class="post_card_title"><?=$post["title"];?></h2>
    
    <p class="post_card_date"><?=$date;?></p>

    <?php
        if($image != false){?>
            <div class="post_card_image_frame">
                <img class="post_card_image" src="<?= $image;?>" alt="Bild för inlägget <?=$post['title'];?>">
            </div>
        <?php } 
    ?>

    <div class="post_card_description">
        <?=$post["description"];?>
    </div>

    <?php
        if($_SESSION['is_admin'] === true){?>
            <a href="views/create_post_view.php?update_post=<?=$post['id']?>" class="edit_post">Redigera inlägg</a>
            <a href="includes/delete_post.php?remove_post=<?=$post['id']?>" class="edit_post">Ta bort inlägg</a>
    <?php } ?>

    <div class="link_all_comments">
    <a href="views/comment_view.php?post=<?=$post['id']?>#comment">Visa alla kommentarer(<?php include "includes/fetch_number_of_comments.php";?>)</a>
    </div>

    <hr class="post_card_border">
            
</div>