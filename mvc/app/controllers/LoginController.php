<?php 
class LoginController extends BaseController {

    private $__Login ;
    function __construct($conn)
    {
        $this->__Login = $this->initModel("AdminModel",$conn);
    }

    public function admin()
    {
        if (isset($_POST['submit'])) {
            $this->__Login->createProduct($_POST);
        }
       
        $this->view("Admin");
    }
    public function user()
    {
        $this->view("adminuser");
    }
}

?>