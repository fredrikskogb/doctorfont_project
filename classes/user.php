<?php
session_start();
class User 
{

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function register($username, $password, $email){

        //Checking if username, password is to short or if email is missing.

        if(strlen($username) < 4){
            header('Location: ../views/login_view.php?username_to_short=true');
            exit();
        } elseif(strlen($password) < 4){
            header('Location: ../views/login_view.php?password_to_short=true');
            exit();
        } elseif(strlen($email) < 1 || ctype_space($email)){
            header('Location: ../views/login_view.php?missing_email=true');
            exit();
        }

        //Checking if username or email is taken.

        $statement = $this->pdo->prepare("SELECT username, mail FROM users WHERE username = :username OR mail = :email");
        $statement->execute(
            [
                ":username" => $username,
                ":email" => $email
            ]
        );

        $fetched_data = $statement->fetch();
        
        if($fetched_data['username'] == $username){
            header('Location: ../views/register_view.php?username_taken=true');
            exit();
        } elseif($fetched_data['mail'] == $email){
            header('Location: ../views/register_view.php?email_taken=true');
            exit();
        } else{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $statement = $this->pdo->prepare("INSERT INTO users (username, password, mail) VALUES (:username, :password, :email)");

            $statement->execute(
                [
                    ":username" => $username,
                    ":password" => $hashed_password,
                    ":email" => $email
                ]
            );

            header('Location: ../views/login_view.php');
        }

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

    
}
