<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casio World Time AE-1200WHD-1AVDF</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            flex-direction: column;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .breadcrumb {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #333;
        }

        .product {
            display: flex;
            gap: 20px;
        }

        .product-image {
            width: 350px;
        }

        .product-image img {
            width: 100%;
            height: auto;
        }

        .product-info {
            flex: 1;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 20px;
            color: #e94435;
            margin-bottom: 10px;
        }

        .product-description {
            margin-bottom: 20px;
        }

        .product-buttons {
            display: flex;
            gap: 10px;
        }

        .product-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-primary {
            background-color: #e94435;
            color: #fff;
        }

        .button-secondary {
            background-color: #333;
            color: #fff;
        }

        .product-actions {
            margin-top: 20px;
        }

        .product-actions ul {
            list-style: none;
            padding: 0;
        }

        .product-actions li {
            margin-bottom: 10px;
        }

        .product-actions i {
            color: #e94435;
            margin-right: 5px;
        }

        .product-thumbnail {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .product-thumbnail img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<?php ;
$dh=$data['data'];



?>
    <div class="container">
        <div class="breadcrumb">
            <a href="#">Trang chủ</a>
            <span>/</span>
            <a href="#">Đồng Hồ Nam</a>
            <span>/</span>
            <a href="#">Casio</a>
        </div>

        <div class="product">
            <div class="product-image">
                <img src="<?php echo  $dh[0]->img1; ?>" alt="Casio World Time AE-1200WHD-1AVDF">
            </div>

            <div class="product-info">
                <h1 class="product-title"></h1><?php echo $dh[0]->name;?></h1>
                <h1 class="product-title"><?php echo $dh[0]->fullname;?></h1>
                <p class="product-description"> <?php echo $dh[0]->describes;?> </h1></p>
                <p class="product-price"><?php echo number_format($dh[0]->priceshop, 0, '.', '. ') . "$" ?></p>
                <p style="margin-bottom: 20px;" ><input type="number" name="quantyti" id="" value="1" placeholder="sô lượng"></p>
                <div class="product-buttons">
                <a href="http://localhost/mvc/product/sanphamdh?id=<?php echo $dh[0]->id ?>/sl=">   <button class="button-primary">Thêm vào giỏ hàng</button></a> 
                    <button class="button-primary">mua ngay</button>
                    <button class="button-secondary">Mua trả góp</button>
                </div>
                <div class="product-actions">
                    <ul>
                        <li><i class="fas fa-check"></i> Dịch vụ gói quà miễn phí khi mua tại cửa hàng.</li>
                        <li><i class="fas fa-check"></i> Khi thanh toán qua Home PayLater tại Hải Triều:</li>
                        <li>- Giảm 50% tối đa 100K cho đơn từ 200K</li>
                        <li>- Giảm 5% tối đa 500K</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="product-thumbnail">
            <img src="= <?php echo $dh[0]->img2;?>" alt="Casio World Time AE-1200WHD-1AVDF">
            <img src=" <?php echo $dh[0]->img3;?>" alt="Casio World Time AE-1200WHD-1AVDF">
            <img src=" <?php echo $dh[0]->img4;?>" alt="Casio World Time AE-1200WHD-1AVDF">
            <a href="#">
                <img src=" <?php echo $dh[0]->img5;?>" alt="Casio World Time AE-1200WHD-1AVDF">
            </a>
        </div>
    </div>
</body>
</html>

