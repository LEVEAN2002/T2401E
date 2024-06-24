<?php 
class AdminController extends BaseController {
    private $__homeModel;
    function __construct($conn)
    {
        $this->__homeModel = $this->initModel("HomeModel",$conn);
    }

    public function admin() {
        $getitem=array();
        if(isset($_POST['submit'])){
            if($_POST['id']>0 && isset($_POST['id']))
            {  
                $updateid=$_POST['id'];
                $this ->__homeModel->updateSdata($updateid,$_POST);  }
            else{
                $this ->__homeModel->insertData();}}
        if(isset($_GET['edit'])){
        $id = $_GET['edit'];
      $getitem =   $this ->__homeModel->getitem_sale($id);
    }
        
        $this->view("layouts/client_layout", ["content"=>"admin" ,"getitem"=>$getitem]);
    }
}

?>