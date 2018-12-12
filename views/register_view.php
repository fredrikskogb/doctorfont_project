<?php
    session_start();
    include '../includes/head.php';
?>

<title>Millhouse - Registrera</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body class="body_view">
    <main class="main_login_register">
        
        <div class="image_container">
            <img class="view_logo" src="../images/logo_dark.png" alt="millhouse">
        </div>

        <div class="about_us_login_and_register">
            <p> Millhouse är ett grossistföretag som säljer kläder, 
            accesoarer och mindre inredningsartiklar till mode- och livsstilsbutiker.</p>
        </div>

        <div class="form_container">
            <div>
                <form class="form_views" action="../includes/register.php" method="post">
                    <label for="username">Användarnamn</label>
                    <input type="text" placeholder="Användarnamn, minst 4 tecken" name="username" id="username">
                    
                    <?php if(isset($_SESSION['invalid_username'])) {
                        if ($_SESSION['invalid_username']) {
                            ?> <p class="login_and_registration_error_message">Ogiltigt användarnamn</p> <?php
                        }
                    } ?>

                     <?php if(isset($_SESSION['taken_username'])){
                        if($_SESSION['taken_username']){
                           ?> <p class="login_and_registration_error_message">Användarnamnet är upptaget</p> <?php
                        }
                    } ?>

                    <label for="password">Lösenord</label>
                    <input type="password" placeholder="Lösenord, minst 4 tecken" name="password" id="password">

                    <?php if(isset($_SESSION['invalid_password'])) {
                        if ($_SESSION['invalid_password']) {
                            ?> <p class="login_and_registration_error_message">Ogiltigt lösenord</p> <?php
                        }
                    } ?>


                    <label for="mail">E-mail</label>
                    <input type="email" placeholder="E-mail" name="mail" id="mail">

                    <?php if(isset($_SESSION['invalid_email'])) {
                        if ($_SESSION['invalid_email']) {
                            ?> <p class="login_and_registration_error_message">Ogiltig email</p> <?php
                        }
                    } ?>

                    <?php if(isset($_SESSION['taken_email'])){
                        if($_SESSION['taken_email']){
                           ?> <p class="login_and_registration_error_message">E-postadressen används redan</p> <?php
                        }
                    } ?>

                    <input class="login_and_register_button" type="submit" value="Registrera">
                </form>
                <div>
                    <p class="text_views">Redan medlem? <a class="href_views" href="login_view.php">Logga in här</a></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>