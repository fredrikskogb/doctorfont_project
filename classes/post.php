<?php

include 'interface.php';

class Post implements publication {
    private $pdo;

    public $fetched_posts;

    public $fetched_post;

    public $fetched_category;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function create($title, $image, $description, $category){

        // If input is empty on create_post.php, create a session to use on displaying error.

        if(strlen($title) < 1){
            $_SESSION['title'] = false;
        } else{
            $_SESSION['title'] = true;
        }
        
        if(strlen($description) < 1){
            $_SESSION['description'] = false;
        } else{
            $_SESSION['description'] = true;
        }

        // Make it possible to make post with or without image.

        $created_by = $_SESSION['user_id'];

        $temporary_location = $image['tmp_name'];

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

        }else{
            $statement = $this->pdo->prepare("INSERT INTO posts (title, image, description, category, created_by)
            VALUES (:title, :image, :description, :category, :created_by)");

            $statement->execute([
                ":title" => $title,
                ":image" => false,
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

        header("Location: ../index.php");

    }

    public function deleteImage($id){
        $statement = $this->pdo->prepare("UPDATE posts SET image = false WHERE id = :id");

        $statement->execute(
            [
                ":id" => $id
            ]
        );

        header("Location: $ROOT_URL/doctorfont_project/views/create_post_view.php?update_post=$id");

    }

    public function update($title, $image, $description, $category, $created_by, $id){

        $temporary_location = $image["tmp_name"];

        $new_location = "../uploads/" . $image["name"];

        $upload_ok = move_uploaded_file($temporary_location, $new_location);

        if($upload_ok){
            $statement = $this->pdo->prepare("UPDATE posts SET title = :title, image = :image, description = :description, category = :category, created_by = :created_by WHERE id = :id");

            $statement->execute(
                [
                    ":title" => $title,
                    ":image" => $new_location,
                    ":description" => $description,
                    ":category" => $category,
                    ":created_by" => $created_by, 
                    ":id" => $id
                ]
            );
        }
    }

    public function getAllPosts(){

        $statement = $this->pdo->prepare("SELECT * FROM posts ORDER BY date DESC");
        $statement->execute();

        $fetched_posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->fetched_posts = $fetched_posts;

    }

    public function getSingleCategory($category){

        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE category = :category ORDER BY date DESC");
        $statement->execute(
            [
                ":category" => $category,
            ]
        );

        $fetched_category = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->fetched_category = $fetched_category;

    }

    public function getSinglePost($id){

        $statement = $this->pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $statement->execute(
            [
                ":id" => $id
            ]
        );

        $fetched_post = $statement->fetch();

        $this->fetched_post = $fetched_post;

    }
}