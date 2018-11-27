<?php
session_start();
class User 
{

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function login($username, $password){

        //Fetch all information from logged in user
        $statement = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
        $statement->execute(
            [
                ":username" => $username,
            ]
        );

        $fetched_user = $statement->fetch();

        $is_password_correct = password_verify($password, $fetched_user["password"]);

        if($is_password_correct){
            $_SESSION["username"] = $fetched_user["username"];
            header('Location: ../index.php');
        }else{
            header('Location: ../views/login_view.php?login_failed=true');
        }
    }

    public function register(){

    }
}
