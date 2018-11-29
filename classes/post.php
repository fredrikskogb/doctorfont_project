<?php


class Post implements publication
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function create($title, $image, $description, $category){

        $created_by = $_SESSION['user_id'];

        $statement = $pdo->prepare("INSERT INTO posts (title, image, description, category, created_by)
         VALUES (:title, :image, :desription, :category)");

         $statement->execute([
            ":title" => $title,
            ":image" => $image,
            ":description" => $description,
            ":category" => $category,
            ":created_by" => $created_by
         ]);


    }

    public function delete($delete){
        $statement = $this->pdo->prepare("DELETE FROM posts WHERE id = :id");

        $statement->execute(
            [
                ":id" => $delete,
            ]
        );

        header('Location: ../views/index.php');
    }

    public function update(){
        
    }
}