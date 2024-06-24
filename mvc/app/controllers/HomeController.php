<?php 
class HomeController extends BaseController {

    private $__homeModel ;
    function __construct($conn)
    {
        $this->__homeModel = $this->initModel("HomeModel",$conn);
    }

    public function index() {
        $hbodyList = $this->__homeModel->getAll("hbody");
        $sanphamdh = $this->__homeModel->getAll("sanphamdh");
        $this ->view("layouts/header");
        $this->view("home", ['data1' => $hbodyList,'data2'=>$sanphamdh]);

        $this ->view("layouts/footer");
        


    }
}

?>