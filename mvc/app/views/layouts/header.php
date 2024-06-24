<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{margin: 0;}
        .text_alight{background-color: blanchedalmond;
                    text-align: center;}
        nav{
            margin-top: 20px;
            display: flex;
            justify-content: center;
            background-color: bisque;
        }
        li{list-style-type: none;
            text-transform: uppercase;
            font-size: 15px;
            padding: 10px 20px;
            color: black;
          
        }
        a{
            text-decoration: none;
            color: black;
        }
        
    </style>
</head>
<body>
    <div>

<div class="text_alight" >đăng kí nhận thông tin mới nhất</div>
<nav>

    <li><a href="http://localhost/mvc/home/index"> trang chủ</a>  </li>
    <li><a href="">sản phẩm</a> </li>
    <li><a href="">liên hệ</a> </li>
   <?php if(isset($_SESSION['user']['username'])&& $_SESSION['user']['username']!=null) : 
    echo "<li> HELLO ".$_SESSION['user']['username'] . "</li>" ;
    ?>
    
    <li><a href="http://localhost/mvc/user/logout">ĐĂNG XUẤT </a></li>
    <?php else: ?>
        <li><a href="http://localhost/mvc/user/login">ĐĂNG NHẬP</a></li>
   
<?php endif ; ?>

</nav>


   

</div>
</div>
</body>
</html>

