<?php 
class HomeController extends BaseController {
    private $__homeModel;
    function __construct($conn)
    {
        $this->__homeModel = $this->initModel("HomeModel",$conn);
    }

    public function index() {
        $item_sale = $this->__homeModel->getAllitem_sale();
        $this->view("layouts/client_layout", ["content"=>"home", "data"=>$item_sale]);
    }
}

?>