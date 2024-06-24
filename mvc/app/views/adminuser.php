<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
               table{
            border-collapse: collapse;
            width:70% ;
            margin: 0 auto;
            font-size: 12px;
            text-align: center;
        }
        
        .lable{
            width: 10%;
        }
        input{width: 90%;
            height: 30px;}
        
  

   
        .img{width: 50px;}
    
        form{
            margin: 100px 0;
        }
        .a{
            
            display: inline-block ;
            background-color: beige;
            padding: 15x;
            border-bottom: black 1px solid;
        }
    </style>
    

</head>
<body>
    <a href="http://localhost/mvc/admin/admin">sản phẩm</a><br>
    <a href="http://localhost/mvc/admin/user">tài khoản</a>
<div>
    <input type="text" name="user" >
    <input type="text" name="password" >
    <input type="submit" value="">

</div>


    <form method="post">
    </form>
    <table>
       <tr>
        <th>username</th>
        <th>password</th>
        <th>role</th>
       </tr>
<?php
foreach($data['data'] as $key):
?>
<tr>
        <th><?php echo  $key ->username ?></th>
        <th><?php echo  $key ->password ?></th>
        <th><?php echo  $key ->role ?></th>
       </tr>

<?php endforeach ;?>
</table>
</body>
</html>