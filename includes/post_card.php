<?php
    $image = substr($post['image'], 3);
?>

<div class="post_card">
    
    <h2 class="post_card_title"><?=$post["title"];?></h2>
    <div class="post_card_image_frame">
        <img src="<?= $image;?>" alt="Bild för inlägget <?=$post['title'];?>">
    </div>
    <div class="post_card_description">
        <?=$post["description"];?>
    </div>
    <p class="post_card_date"><?=$post["date"];?></p>
</div>