<?php ?>

<header class="navbar">
    <div class="navbar_container">
        <ul class="navbar_linklist">
            <li><a href="<?= $ROOT_URL ?>/index.php">Hem</a></li>
            <li><a href="<?= $ROOT_URL ?>/views/about_us.php">Om oss</a></li>
            <li class="navbar_dropdown">
                <span>Kategorier</span>
                <div class="navbar_dropdown_content">
                    <a href="<?= $ROOT_URL ?>">Kategori 1</a>
                    <p>Kategori 2</p>
                    <p>Kategori 3</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="navbar_container">
        <a href="#" id="navbar_logout_link">Logga ut</a>
    </div>
</header>