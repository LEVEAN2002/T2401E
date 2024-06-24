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
        .textover{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
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
    <a class="a" href="http://localhost/mvc/admin/admin">sản phẩm</a>
    <a class="a" href="http://localhost/mvc/admin/user">tài khoản</a>
<?php 

$getid = $data['getid'];
?>
    <form method="post" action="http://localhost/mvc/admin/admin">
        <table>

        
            <caption> <h1>insert into đồng hồ </h1></caption>
            <tr style="display: none;">
                <td>id</td>
                <td><input type="text" name="id" id="" value="<?php if (isset($getid[0])  )  {echo $getid[0]->id ;}?>"></td>
            </tr>

        <tr>
            <td class="lable" ><label for="">tên đồng hồ</label></td>
            <td><input type="text" name="name" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->name ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">tên đầy đủ</label></td>
            <td><input type="text" name="fullname" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->fullname ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">mô tả</label></td>
            <td><input type="text" name="describes" id=""value="<?php if (isset($getid[0])  ){echo $getid[0]->describes ;}?>" ></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">giá mua</label></td>
            <td><input type="text" name="pricebuy" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->pricebuy ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">giá bán</label></td>
            <td><input type="text" name="priceshop" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->priceshop ;}?>" ></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">số lượng</label></td>
            <td><input type="text" name="quantity" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->quantity ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">link ảnh 1</label></td>
            <td><input type="text" name="img1" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->img1 ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">link ảnh 2</label></td>
            <td><input type="text" name="img2" id=""value="<?php if (isset($getid[0])  ){echo $getid[0]->img2 ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">link ảnh 3</label></td>
            <td><input type="text" name="img3" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->img3 ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">link ảnh 4</label></td>
            <td><input type="text" name="img4" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->img4 ;}?>"></td>
        </tr>
        <tr>
            <td class="lable" ><label for="">link ảnh 5</label></td>
            <td><input type="text" name="img5" id="" value="<?php if (isset($getid[0])  ){echo $getid[0]->img5 ;}?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="save"></td>
        </tr>
        </table>
    </form>
    <table border="1" border-collapse="0">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>fullname</th>
        <th>describes</th>
        <th>quantity</th>
        <th>pricebuy</th>
        <th>priceshop</th>
        <th>img1</th>
        <th>img2</th>
        <th>img3</th>
        <th>img4</th>
        <th>img5</th>
        <th>edit</th>
    </tr>
<?php

    $sanphamdonghos= $data['data'];
    foreach ($sanphamdonghos as $sanphamdongho):?>

    <tr>
        <td><?php echo  $sanphamdongho ->id  ?> </td>
        <td><?php echo $sanphamdongho ->name ?> </td>
        <td class="textover" ><?php echo $sanphamdongho ->fullname ?> </td>
        <td class="textover" > <?php echo $sanphamdongho ->describes ?> </td>
        <td><?php echo $sanphamdongho ->quantity ?> </td>
        <td><?php echo $sanphamdongho ->pricebuy."VND" ?> </td>
        <td><?php echo $sanphamdongho ->priceshop."VND" ?> </td>
        <td><img class="img" src="<?php echo $sanphamdongho->img1 ?>" alt=""> </td>
        <td><img class="img" src="<?php echo $sanphamdongho->img2 ?>" alt=""> </td>
        <td><img class="img" src="<?php echo $sanphamdongho->img3 ?>" alt=""> </td>
        <td><img class="img" src="<?php echo $sanphamdongho->img4 ?>" alt=""> </td>
        <td><img class="img" src="<?php echo $sanphamdongho->img5 ?>" alt=""> </td>
        <td><img class="img" src="<?php echo $sanphamdongho->img5 ?>" alt=""> </td>
        <td><button><a href="http://localhost/mvc/admin/admin?delete= '<?php echo $sanphamdongho ->id ?>'">delete</a></button>


        <button><a href="http://localhost/mvc/admin/admin?edit=<?php echo $sanphamdongho->id ?>">Edit</a></button></td>
    </tr>
    <?php endforeach ?>
</table>
</body>
</html>