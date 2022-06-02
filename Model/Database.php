<?php
class Database {
   

    protected $pdo;
    private $servername = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'mydb';

    protected function connect() {
        
        try{
            $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4", $this->servername, $this->database);
            $this->pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo  "Success";
        }catch(PDOException $e){
            echo 'Connect failed ' . $e->getMessage();
        }
    }

  
}