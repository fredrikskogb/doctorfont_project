<?php
session_start();
include '../includes/head.php';
?>
<title>Millhouse - Logga in</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="body_view">
    <main class="main_login_register">
        <div class="image_container">
            <img class="view_logo" src="../images/logo_light.png" alt="millhouse">
        </div>
        <div class="form_container">
            <div>
                <form method="POST" class="form_views" action="../includes/login.php">
                    <label for="username">Användarnamn</label>
                    <input type="text" placeholder="Användarnamn" name="username" id="username">

                    <label for="password">Lösenord</label>
                    <input type="text" placeholder="Lösenord" name="password" id="password">
                    
                    <?php if(isset($_GET['login_failed'])){
                            if($_GET['login_failed']){
                                ?> <p class="login_and_registration_error_message">Felaktigt användarnamn eller lösenord</p> <?php
                            }
                        }
                    ?>

                    <input type="submit" value="Logga in">
                </form>
                <div>
                    <p class="text_views">Inte medlem? <a class="href_views" href="register_view.php">Registrera dig här</a></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
