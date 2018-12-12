<?php
session_start();
include '../includes/head.php';

if(isset($_GET['update_post'])){
    include '../includes/database_connection.php';
    include '../classes/post.php';
    $edit_post = new Post($pdo);
    $edit_post->getSinglePost($_GET['update_post']);
    
    $placeholder = $edit_post->fetched_post;
}

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
    <main class="main_login_register create_post">
       
        <div class="form_container card">
            <div>

                <form class="form_views create_views_container" action="<?php if(isset($_GET['update_post'])){echo '../includes/update_post.php';}
                else{echo '../includes/create_post.php';}?>" method="POST" enctype="multipart/form-data">

                    <label for="title">Titel</label>
                    <input type="text" placeholder="Rubrik..." name="title" id="title" value="<?php if(isset($placeholder)){echo $placeholder['title'];} ?>">
                    <?php
                        if(isset($_SESSION['title'])){
                            if($_SESSION['title'] === false){?>
                                <p class="login_and_registration_error_message">Rubrik saknas.</p>
                            <?php }
                        }
                    ?>

                    <label for="file">Fil</label>
                    <input type="file" name="image" id="file">
                    <a class="remove_picture_button"href="../includes/remove_image.php?remove_image=<?=$_GET["update_post"];?>">Ta bort bild</a>

                    <label for="summernote">Beskrivning</label>
                    <textarea type="text" placeholder="Beskrivning..." name="description" id="summernote"><?php if(isset($placeholder)){echo $placeholder['description'];} ?></textarea>
                    <?php
                        if(isset($_SESSION['description'])){
                            if($_SESSION['description'] === false){?>
                                <p class="login_and_registration_error_message">Beskrivning ej ifyllt.</p>
                            <?php }
                        }
                    ?>

                    <div class="radio_wrapper">
                        <p>VÄLJ KATEGORI:</p>

                        <div>
                            <input type="radio" name="category" value="solglasögon" 
                            <?php if(isset($placeholder['category'])){
                                    if($placeholder['category'] == "solglasögon")
                                    {?> checked <?php ;}} else{?> checked <?php } ?>>
                            <label for="huey" class="label_block">SOLGLASÖGON</label>
                        </div>

                        <div>
                            <input type="radio" name="category" value="inredningsartiklar"
                            <?php if(isset($placeholder['category'])){
                                    if($placeholder['category'] == "inredningsartiklar")
                                    {?> checked <?php ;}} ?> >
                            <label for="dewey" class="label_block">INREDNINGSARTIKLAR</label>
                        </div>

                        <div>
                            <input type="radio" name="category" value="klockor" 
                            <?php if(isset($placeholder['category'])){
                                    if($placeholder['category'] == "klockor")
                                    {?> checked <?php ;}} ?> >
                            <label for="louie" class="label_block">KLOCKOR</label>
                        </div>
                        
                        <div>
                            <input type="radio" name="category" value="mode" 
                            <?php if(isset($placeholder['category'])){
                                    if($placeholder['category'] == "mode")
                                    {?> checked <?php ;}} ?>>
                            <label for="louie" class="label_block">MODE</label>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?=$_GET['update_post']?>">

                    <input type="submit" value="<?php if(isset($_GET['update_post'])){echo 'Uppdatera';}
                else{echo 'Lägg till';}?>" class="submit create_post_button">
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