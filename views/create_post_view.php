<?php
include '../includes/head.php';
?>
<title>Millhouse - Skapa inlägg</title>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="body_view">
    <main class="main_login_register">
        <div class="image_container">
            <img class="view_logo view_logo_create" src="../images/logo_light.png" alt="millhouse">
        </div>
        <div class="form_container">
            <div>
                <form class="form_views create_views_container" action="" method="POST" enctype="multipart/form-data">
                    <label for="title">Titel</label>
                    <input type="text" placeholder="Titel..." name="title" id="title">

                    <label for="file">Fil</label>
                    <input type="file" name="file" id="file">

                    <label for="summernote">Beskrivning</label>
                    <textarea type="text" placeholder="Beskrivning..." name="editordata" id="summernote"></textarea>

                    <div class="radio_wrapper">
                        <p>Välj kategori:</p>

                        <div>
                            <input type="radio" name="category" value="solglasögon" checked>
                            <label for="huey" class="label_block">Solglasögon</label>
                        </div>

                        <div>
                            <input type="radio" name="category" value="inredningsartiklar">
                            <label for="dewey" class="label_block">Inredningsartiklar</label>
                        </div>

                        <div>
                            <input type="radio" name="category" value="klockor">
                            <label for="louie" class="label_block">Klockor</label>
                        </div>
                        
                        <div>
                            <input type="radio" name="category" value="mode">
                            <label for="louie" class="label_block">Mode</label>
                        </div>
                    </div>

                    <input type="submit" value="Lägg till" class="submit">
                    <script>
                        $(document).ready(function() {
                        $('#summernote').summernote();
                        });
                    </script>
                </form>
            </div>
        </div>
    </main>
</body>