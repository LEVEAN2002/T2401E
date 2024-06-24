<?php 
class AdminController extends BaseController {

    private $__HomeModel ,$_delete ;
    function __construct($conn)
    {
        $this->__HomeModel = $this->initModel("HomeModel",$conn);
       
    }

    public function admin($id=null)
    {
        $getid=null;
        if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $getid= $this->__HomeModel->getitemidtable($id,"sanphamdh");
        }
        
        $this ->view("layouts/header");
        $sanphamdh=  $this->__HomeModel->getAll("sanphamdh");
        if (isset($_POST['submit'])) {
            if( $$_POST['id']<0){
                $this->__HomeModel->createProduct($_POST);
                  
            }
            else{
                $this ->__HomeModel->updateSanphamDh($getid,$_POST);
             }
        }
        
        if (isset($_GET['delete'])) {
            $id=$_GET['delete'];
            $this->__HomeModel->deleteProduct($id);
        }

           $this ->view("admin",["data"=>$sanphamdh,"getid"=>$getid]);
       
        $this ->view("layouts/footer");
    }
    public function user()
    {
        $this ->view("layouts/header");
        $datauser = $this->__HomeModel->getAll("user");
        $this->view("adminuser",["data"=>$datauser]);
        $this ->view("layouts/footer");
    }
}

?>