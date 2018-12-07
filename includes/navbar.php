<header>
<nav class="navbar">
        <ul class="navbar_linklist">

        <button type="button" class="btn btn-outline-light button"> <li><a href="<?= $ROOT_URL ?>/index.php">Hem</a></li></button>
        <button type="button" class="btn btn-outline-light button"><li><a href="<?= $ROOT_URL ?>/views/about_us_view.php">Om oss</a></li></button>
         <li class="navbar_dropdown">

                <button type="button" class="btn btn-outline-light button"><span>Kategorier</span></button>
                <div class="navbar_dropdown_content">
                    <a href="<?= $ROOT_URL ?>/index.php?category=solglasögon">Solglasögon</a>
                    <a href="<?= $ROOT_URL ?>/index.php?category=inredningsartiklar">Inredningsartiklar</a>
                    <a href="<?= $ROOT_URL ?>/index.php?category=klockor">Klockor</a>
                    <a href="<?= $ROOT_URL ?>/index.php?category=mode">Mode</a>
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
    <div class="icons">
        <div class="icons_wrapper">
            <a href=""><img src="http://localhost/doctorfont_project/images/facebook.svg" alt=""></a>
            <a href=""><img src="http://localhost/doctorfont_project/images/instagram.svg" alt=""></a>
            <a href=""><img src="http://localhost/doctorfont_project/images/twitter.svg" alt=""></a>
        </div>
        
        <button type="button" class="btn btn-outline-light button_logout"><a href="<?= $ROOT_URL ?>/includes/logout.php" id="">Logga ut</a></button>
    </div>

    </div>
</nav class="navbar">
</header>