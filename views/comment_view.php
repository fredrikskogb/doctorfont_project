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
<title>Millhouse Blog</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">


</head>
    <body>
        <?php include '../includes/navbar.php';?>