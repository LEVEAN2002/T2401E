<?php
class UserModel{
    private $__conn ; 
    public function __construct($conn) {
        $this->__conn = $conn;
      
    }

    public function login($username,$password){
        $sql="select * from user where username=:username and password =:password";
        $stmt=$this->__conn->prepare($sql);
        $stmt->bindParam("username",$username,PDO::PARAM_STR);
        $stmt->bindParam("password",$password,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}


?>