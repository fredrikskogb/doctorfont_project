<?php
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
                <form class="form_views" action="">
                    <label for="username">Användarnamn</label>
                    <input type="text" placeholder="Användarnamn" name="username" id="username">

                    <label for="password">Lösenord</label>
                    <input type="text" placeholder="Lösenord" name="password" id="password">

                    <label for="mail">E-mail</label>
                    <input type="text" placeholder="E-mail" name="mail" id="mail">

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