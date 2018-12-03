<?php

include 'interface.php';

class Comment implements publication{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;

}

    public function create($content, $post_id, $created_by){

        $created_by = $_SESSION['user_id'];

        $statement = $this->pdo->prepare("INSERT INTO comments (content, post_id, created_by)
         VALUES (:content, :post_id, :created_by)");

         $statement->execute([
            ":content" => $content,
            ":post_id" => $post_id,
            ":created_by" => $created_by
         ]);

    }

}