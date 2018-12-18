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

        $_SESSION['title'] = true;
        
        $_SESSION['description'] = true;
        
        // Make it possible to make post with or without image.

        $created_by = $_SESSION['user_id'];

        $temporary_location = $image['tmp_name'];

        $new_location = "../uploads/" . $image["name"];

        $upload_ok = move_uploaded_file($temporary_location, $new_location);

        // If image is chosen, then run this statement

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

        // If image is not chosen, then run this statement

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

    // Deletes post with corresponding comments

    public function delete($delete){
        $statement = $this->pdo->prepare("DELETE FROM posts WHERE id = :id");

        $statement->execute(
            [
                ":id" => $delete
            ]
        );

        $statement = $this->pdo->prepare("DELETE FROM comments WHERE post_id = :id");

        $statement->execute(
            [
                ":id" => $delete
            ]
        );

        header("Location: ../index.php");

    }

    // Set image to false/delete image, then redirect to updating post

    public function deleteImage($id){
        $statement = $this->pdo->prepare("UPDATE posts SET image = false WHERE id = :id");

        $statement->execute(
            [
                ":id" => $id
            ]
        );

        header("Location: $ROOT_URL/doctorfont_project/views/create_post_view.php?update_post=$id");

    }

    // Update changes on chosen post

    public function update($title, $image, $description, $category, $created_by, $id){

        $_SESSION['title'] = true;
        
        $_SESSION['description'] = true;

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

    // Used to keep posted image when post is updated

    public function updateKeepImage($title, $description, $category, $created_by, $id){

        $_SESSION['title'] = true;
        
        $_SESSION['description'] = true;
        
        $statement = $this->pdo->prepare("UPDATE posts SET title = :title, description = :description, category = :category, created_by = :created_by WHERE id = :id");

        $statement->execute(
            [
                ":title" => $title,
                ":description" => $description,
                ":category" => $category,
                ":created_by" => $created_by, 
                ":id" => $id
            ]
        );
        
    }

    // Fetches all post in chronological order for main page

    public function getAllPosts(){

        $statement = $this->pdo->prepare("SELECT * FROM posts ORDER BY date DESC");
        $statement->execute();

        $fetched_posts = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->fetched_posts = $fetched_posts;

    }

    // Fetches all post within a certain category

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

    // Fetches a single post for commenting-view

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