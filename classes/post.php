<?php

include 'interface.php';

class Post implements publication
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function create($title, $image, $description, $category){

        $created_by = $_SESSION['user_id'];

        $temporary_location = $image["tmp_name"];

        $new_location = "../uploads/" . $image["name"];

        $upload_ok = move_uploaded_file($temporary_location, $new_location);

        if($upload_ok){

        $statement = $this->pdo->prepare("INSERT INTO posts (title, image, description, category, created_by)
         VALUES (:title, :image, :description, :category, :created_by)");

         $statement->execute([
            ":title" => $title,
            ":image" => $new_location,
            ":description" => $description,
            ":category" => $category,
            ":created_by" => $created_by
         ]);

    }
}


    public function delete($delete){
        $statement = $this->pdo->prepare("DELETE FROM posts WHERE id = :id");

        $statement->execute(
            [
                ":id" => $delete
            ]
        );

    }

    public function update(){
        
    }

    public function getAllPosts(){

        $statement = $this->pdo->prepare("SELECT * FROM posts");
        $statement->execute();

        $fetched_posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $fetched_posts;


        $all_posts = getAllposts();


    }
}