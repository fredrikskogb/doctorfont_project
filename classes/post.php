<?php

class Post implements publication
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function create(){

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