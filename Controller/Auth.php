<?php
include_once './Model/Database.php';
include_once './Model/User.php';

class Auth extends Database{

    public function __construct()
    {
        $this->connect();
    }

    public function user(){
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        return NULL;
    }

    public function login($name, $password){
        $sql = "select * from users where name=? and password=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name, $password]);
    
        $user = $stmt->fetch();
        if($user) {
            $_SESSION['user'] = $user;
        }else{
            redirect(url_pattern('loginController', 'login'));
        }
    }

    public function register($name, $password){
        //check name is exist
        $sql = "select * from users where name=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name]);
    
        $user = $stmt->fetch();

        if($user){
            //user name existed
            $_SESSION['user'] = $user;
        }else{
            $role = 'user';
            $sql = "insert into users(name, password, role) values('$name','$password', '$role)";
    
            $this->pdo->exec($sql);
            $_SESSION['user'] = $user;
        }
    }
}