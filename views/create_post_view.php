<?php
include '../includes/head.php';
?>
<title>Millhouse - Skapa inlägg</title>
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
                    <label for="title">Titel</label>
                    <input type="text" placeholder="Titel..." name="title" id="title">

                    <label for="file">Fil</label>
                    <input type="file" name="file" id="file">

                    <label for="description">Beskrivning</label>
                    <textarea type="text" placeholder="Beskrivning..." name="description" id="description"></textarea>

                    <input type="submit" value="Lägg till">
                </form>
            </div>
        </div>
    </main>
</body>