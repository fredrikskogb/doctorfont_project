<?php ?>

<header class="navbar">
    <ul class="navbar_linklist">
        <li><a href="<?= $ROOT_URL ?>/index.php">Hem</a></li>
        <li><a href="<?= $ROOT_URL ?>/views/about_us.html">Om oss</a></li>
        <li id="navbar_dropdown">
            <span>Kategorier</span>
                <div class="navbar_dropdown_content">
                    <p>Kategori 1</p>
                    <p>Kategori 2</p>
                    <p>Kategori 3</p>
                </div>
        </li>
    </ul>
</header>