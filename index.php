<?php
session_start();
include 'config.php';
include 'includes/head.php';

if(isset($_SESSION['is_logged_in'])){
    if($_SESSION['is_logged_in'] === false){
        header('Location: views/login_view.php');
        exit();
    }
} else{
    header('Location: views/login_view.php');
    exit();
}

?>
<title>Millhouse Blog</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <body>
        <?php include 'includes/navbar.php';?>

        <div class="hero_image_frame">
            <span class="hero_image_inline_helper"></span>
            <img src="images/logo_light.png">
        </div>


<?php
include 'includes/footer.php';
?>
        
    </body>
