<?php 
class productController extends BaseController {
    private $__homeModel , $id;
    function __construct($conn)
    {
        $this->__homeModel = $this->initModel("HomeModel",$conn);
        $this->id  = $_GET['id'];;
    }

    public function hbody() {
        $this ->view("layouts/header");

        if(isset($this->id)){
            
        $itemhbody = $this->__homeModel->getitemidtable($this->id,"hbody");
        $this->view("layouts/product", ["content"=>"product","data"=>$itemhbody]);}
        $this ->view("layouts/footer");
    }
    public function sanphamdh() {
        $this ->view("layouts/header");
        if(isset($this->id)){
        $sanphamdh = $this->__homeModel->getitemidtable($this->id,"sanphamdh");
        $this->view("layouts/sanphamdh", ["content"=>"product","data"=>$sanphamdh]);}
        $this ->view("layouts/footer");
        
    }
}