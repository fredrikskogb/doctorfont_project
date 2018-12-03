<?php
session_start();
include '../config.php';
include '../includes/head.php';
include '../includes/database_connection.php';
include '../classes/post.php';

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
<title>Millhouse Blog - Visa kommentarer</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">


</head>
    <body>
        <?php 
        include '../includes/navbar.php';
        $post = new Post($pdo);
        $post->getSinglePost($_GET['post']);
        $_POST['post_id'] = $_GET['post'];
        ?>
        <div class="single_post_container">
        <?php
        include '../includes/single_post_card.php';
        include '../includes/comment_form.php';
        include '../includes/footer.php';
        ?>
    </body>
</html>
        