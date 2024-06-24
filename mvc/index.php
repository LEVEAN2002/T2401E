<link rel="stylesheet" href="http://localhost/mvc/app/asset/css/layout.css">
<?php 
session_start();

require_once "app/config/DB.php";
$conn = DBConnection::getConnection();
require_once "app/midderware/AuthMiddleware.php";
require_once "app/controllers/BaseController.php";
require_once "app/models/HomeModel.php";
require_once "app/App.php";
$middleware= new Authmiddleware(["admin/index"]);
$app = new App($conn,$middleware);
$model = new HomeModel($conn);


?>