<header>
<nav class="navbar">
        <ul class="navbar_linklist">

        <button type="button" class="btn btn-outline-light button"> <li><a href="<?= $ROOT_URL ?>/index.php">Hem</a></li></button>
        <button type="button" class="btn btn-outline-light button"><li><a href="<?= $ROOT_URL ?>/views/about_us_view.php">Om oss</a></li></button>
         <li class="navbar_dropdown">

                <button type="button" class="btn btn-outline-light button"><span>Kategorier</span></button>
                <div class="navbar_dropdown_content">
                    <a href="?category=solglasögon">Solglasögon</a>
                    <a href="?category=inredningsartiklar">Inredningsartiklar</a>
                    <a href="?category=klockor">Klockor</a>
                    <a href="?category=mode">Mode</a>
                </div>
            </li>
        </ul>

        <div class="dropdown_container">

            <ul class="dropdown">            
                    <li>
                        <a class="nav-link dropdown-toggle button" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MENY
                        </a>
                            <div class="dropdown-menu menu_dropdown" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?= $ROOT_URL ?>index.php">Hem</a>
                                    <a class="dropdown-item"  href="<?= $ROOT_URL ?>/views/about_us_view.php">Om oss</a>
                                        <a class="dropdown-item" href="<?= $ROOT_URL ?>#">Kategorier</a>
                                    
                        </div>
                    </li>
                </ul>
            </div>
            </div>     
        </div>
       
    </div>
    <button type="button" class="btn btn-outline-light button_logout"><a href="<?= $ROOT_URL ?>/includes/logout.php" id="">Logga ut</a></button>

    </div>
</nav class="navbar">
</header>