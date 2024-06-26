<?php
    class UserController extends BaseController{
        private $__model;
        public function __construct($conn){            
            $this->__model = $this->initModel("UserModel",$conn);
        }
    
    public function login(){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username=$_POST["username"];
            $password=$_POST["password"];
            $user=$this->__model->login($username,$password);
            
            if(isset($user) && $user){
                $_SESSION["user"]=$user;
                if($user["role"]=="admin"){
                    header("Location:http://localhost/mvc/admin/admin");
                   
                }
                else{
                    header("Location:http://localhost/mvc/home/index");
                }
            }
            else{
                header("Location:http://localhost/mvc/user/login?err=true");
            }
        }
        else{
            $this->view("login");
        }
    }
    public function logout(){
        if(isset(($_SESSION["user"]))){
            $role = $_SESSION["user"]["role"];
            $_SESSION["user"]=null;
            if($role=="admin"){
                header("Location:http://localhost/mvc/user/login");
            }
            else{
                header("Location:http://localhost/mvc/home/index");
            }
        }
        header("Location:http://localhost/mvc/home/index");
       
    }
    public function create(){
        
      $this->view("createuser");
    }
}
?>