<?php
session_start();
include 'config.php';
include 'includes/head.php';
include 'includes/database_connection.php';
include 'classes/post.php';

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
        <?php 
        include 'includes/navbar.php';
        include 'includes/hero_image.php';
        ?>

        <?php
        if($_SESSION['is_admin'] === true){?>
        <a href="views/create_post_view.php" class="new_post">Skapa nytt inlägg</a>

        <?php }

        $all_posts = new Post($pdo);
        $all_posts->getAllPosts();
        
        /* If category is not set, display all posts
         * Else if category is set, display set category
         * If there are no posts in that category, display error text
        */ 
        if(!isset($_GET["category"])){
            foreach($all_posts->fetched_posts as $post){
                include 'includes/post_card.php';
            }
        }elseif(isset($_GET["category"])){
            $posts_category = new Post($pdo);
            $posts_category->getSingleCategory($_GET["category"]);
            foreach($posts_category->fetched_category as $post){
                include 'includes/post_card.php';
            }
            if(isset($_GET["category"])){
                if(!isset($post["title"])){?>
                <p class="category_error">Det finns inga inlägg i denna kategori.</p>
            <?php }
            }
        }

        include 'includes/footer.php';
        ?>


        
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</html>