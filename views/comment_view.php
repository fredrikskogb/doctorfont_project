<?php
    session_start();
    include '../config.php';
    include '../includes/head.php';
    include '../includes/database_connection.php';
    include '../classes/post.php';
    include '../classes/comment.php';

    if(isset($_SESSION['is_logged_in'])){
        if($_SESSION['is_logged_in'] === false){
            header('Location: login_view.php');
            exit();
        }
    } else{
        header('Location: login_view.php');
        exit();
    }
?>

<title>Millhouse Blog - Visa kommentarer</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
    <?php 
        include '../includes/navbar.php';
        include '../includes/hero_image.php';
        $post = new Post($pdo);
        $post->getSinglePost($_GET['post']);
        $_POST['post_id'] = $_GET['post'];          

        $comment = new Comment($pdo);
        $comment->getComment($_POST['post_id']);
    ?>
    <div class="single_post_container">
        <?php
            include '../includes/single_post_card.php';
            include '../includes/all_comments.php';
            include '../includes/comment_form.php';
            include '../includes/footer.php';
        ?>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
        