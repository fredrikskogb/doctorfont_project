<header class="navbar">
    <div class="navbar_container">
        <ul class="navbar_linklist">
           
            <li><a href="<?= $ROOT_URL ?>/index.php">Hem</a></li>
            <li><a href="<?= $ROOT_URL ?>/views/about_us_view.php">Om oss</a></li>
            <li class="navbar_dropdown">

                <button type="button" class="btn btn-outline-light"><span>Kategorier</span></button>
                <div class="navbar_dropdown_content">
                    <a href="<?= $ROOT_URL ?>">Kategori 1</a>
                    <p>Kategori 2</p>
                    <p>Kategori 3</p>
                </div>
            </li>
        </ul>

        <div class="dropdown_container">

            <ul class="dropdown">            
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MENY
                        </a>
                            <div class="dropdown-menu menu_dropdown" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?= $ROOT_URL ?>/index.php">Hem</a>
                                    <a class="dropdown-item"  href="<?= $ROOT_URL ?>/views/about_us_view.php">Om oss</a>
                                        <a class="dropdown-item" href="<?= $ROOT_URL ?>/views/categories_view.php">Kategorier</a>
                                        
                                            <a class="dropdown-item" href="#">Kontakt</a>
                        </div>
                    </li>
                </ul>
            </div>
            </div>     
        </div>
    </div>
    <div class="navbar_container">
    <button type="button" class="btn btn-outline-light"><a href="<?= $ROOT_URL ?>/includes/logout.php" id="navbar_logout_link">Logga ut</a></button>
        
    </div>
</header>

</body>




