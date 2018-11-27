<?php

class Post implements publication
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function create(){

    }

    public function delete(){

    }

    public function update(){
        
    }
}