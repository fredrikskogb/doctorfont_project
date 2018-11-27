<?php
//session_destroy();
session_start();
include '../includes/head.php';
?>
<title>Millhouse - Registrera</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="body_view">
    <main class="main_login_register">
        <div class="image_container">
            <img class="view_logo" src="../images/logo_light.png" alt="millhouse">
        </div>
        <div class="form_container">
            <div>
                <form class="form_views" action="../includes/register.php" method="post">
                    <label for="username">Användarnamn</label>
                    <input type="text" placeholder="Användarnamn" name="username" id="username">
                    
                    <?php if(isset($_SESSION['invalid_username'])) {
                        if ($_SESSION['invalid_username']) {
                            echo "Ogiltigt användarnamn";
                        }
                    } ?>

                    <label for="password">Lösenord</label>
                    <input type="text" placeholder="Lösenord" name="password" id="password">

                    <?php if(isset($_SESSION['invalid_password'])) {
                        if ($_SESSION['invalid_password']) {
                            echo "Ogiltigt lösenord";
                        }
                    } ?>

                    <label for="mail">E-mail</label>
                    <input type="text" placeholder="E-mail" name="mail" id="mail">

                    <?php if(isset($_SESSION['invalid_email'])) {
                        if ($_SESSION['invalid_email']) {
                            echo "Ogiltig email";
                        }
                    } ?>

                    <input type="submit" value="Registrera">
                </form>
                <div>
                    <p class="text_views">Redan medlem? <a class="href_views" href="login_view.php">Logga in här</a></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>