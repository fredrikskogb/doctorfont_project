<header>
<nav class="navbar">
        <ul class="navbar_linklist">

        <div class="button"><li><a href="<?= $ROOT_URL ?>/index.php">HEM</a></li></div>
        <div class="button"><li><a href="<?= $ROOT_URL ?>/views/about_us_view.php#about_us_link">OM OSS</a></li></div>
        <li class="navbar_dropdown">

               <div class="button"><span>KATEGORIER</span></div>
                <div class="navbar_dropdown_content">
                    <a href="<?= $ROOT_URL ?>/index.php?category=solglasögon">SOLGLASÖGON</a>
                    <a href="<?= $ROOT_URL ?>/index.php?category=inredningsartiklar">INREDNINGSARTIKLAR</a>
                    <a href="<?= $ROOT_URL ?>/index.php?category=klockor">KLOCKOR</a>
                    <a href="<?= $ROOT_URL ?>/index.php?category=mode">MODE</a>
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
                                <a class="dropdown-item" href="<?= $ROOT_URL ?>/index.php">HEM</a>
                                    <a class="dropdown-item"  href="<?= $ROOT_URL ?>/views/about_us_view.php#about_us_link">OM OSS</a>
                                    <a class="nav-link dropdown-toggle button dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            KATEGORIER
                        </a>
                        <div class="dropdown-menu menu_dropdown" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= $ROOT_URL ?>/index.php?category=solglasögon">SOLGLASÖGON</a>
                            <a class="dropdown-item" href="<?= $ROOT_URL ?>/index.php?category=inredningsartiklar">INREDNINGSARTIKLAR</a>
                            <a class="dropdown-item" href="<?= $ROOT_URL ?>/index.php?category=klockor">KLOCKOR</a>
                            <a class="dropdown-item" href="<?= $ROOT_URL ?>/index.php?category=mode">MODE</a>

                        </div>
                    </li>
                </ul>
            </div>
            </div>     
        </div>
    </div>


    <div class="icons">

        <div class="icons_wrapper">
            <a href=""><img src="<?=$ROOT_URL?>/images/facebook.svg" alt=""></a>
            <a href=""><img src="<?=$ROOT_URL?>/images/instagram.svg" alt=""></a>
            <a href=""><img src="<?=$ROOT_URL?>/images/twitter.svg" alt=""></a>
        </div>
       <div class="button_logout">  
        <a href="<?= $ROOT_URL ?>/includes/logout.php" id="">LOGGA UT</a>
        </div>
    </div>

</nav class="navbar">
</header>