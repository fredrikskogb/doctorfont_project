<?php

class Comment {
    private $pdo;
    public $fetched_comments;

    public function __construct($pdo){
        $this->pdo = $pdo;

}

    public function create($content, $post_id, $created_by) {

        $created_by = $_SESSION['user_id'];

        $statement = $this->pdo->prepare("INSERT INTO comments (content, post_id, created_by)
         VALUES (:content, :post_id, :created_by)");

         $statement->execute([
            ":content" => $content,
            ":post_id" => $post_id,
            ":created_by" => $created_by
         ]);
        
    }
  

    public function getComment($post_id){
        
        $statement = $this->pdo->prepare("SELECT comments.*, users.id as user_id, users.username, is_admin FROM comments INNER JOIN users ON users.id = comments.created_by WHERE post_id = :post_id");
        $statement->execute(
            [
                ":post_id" => $post_id
            ]
        );
        
        $fetched_comments = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->fetched_comments = $fetched_comments;

    }

    public function deleteComment($comment_id){

        $statement = $this->pdo->prepare("DELETE FROM comments WHERE :comment_id = id");
        $statement->execute(
            [
                ":comment_id" => $comment_id
            ]
        );

    }
}