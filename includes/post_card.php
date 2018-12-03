<?php
    $image = substr($post['image'], 3);
    $date = substr($post['date'], 0, -8);
?>

<div class="post_card">
    
    <h2 class="post_card_title"><?=$post["title"];?></h2>
    <div class="post_card_image_frame">
        <img class="post_card_image" src="<?= $image;?>" alt="Bild för inlägget <?=$post['title'];?>">
    </div>
    <div class="post_card_description">
        <?=$post["description"];?>
    </div>
    <p class="post_card_date"><?=$date;?></p>
    <a href="views/comment_view.php">Visa alla kommentarer()</a>

    <?php
        if($i + 1 != $array_length){
            ?>
            <hr class="post_card_border">
            <?php
        }
    ?>

</div>