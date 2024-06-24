<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            table{width: 100%;
           
            line-height: 3;
          
        text-align: left;}
            input{width:100%;
            height: 30px;}
            .lable{width: 10%;}
            form{
                background-color: bisque;
            padding: 10px;
                width: 30%;
                margin-top: 50px;
            }

    </style>
</head>
<body>
 <?php
 $item=array();

  ?>
 

<form action="http://localhost/examphp/admin/admin" method="post">
<table>
    <caption>CRUD TABLE ITEM_SALE</caption>
    <tr>
        <td class="lable"  >id</td>
        <td><input type="text" name="id" value="<?php if(isset($item)) ?>"  ></td>
    </tr>
    <tr>
        <td class="lable">item code</td>
        <td><input type="text" name="item_code"  value="<?php echo $item['item_code' ]  ?>"></td>
        
    </tr>
    <tr>
        <td class="lable">item name</td>
        <td><input type="text" name="item_name"  value="<?php echo $item['item_name' ] ?>">
        <span></span></td>
    </tr>
    <tr>
        <td class="lable">quantity</td>
        <td><input type="text"name="quantity"  value="<?php echo $item['quantity' ] ?>"></td>
    </tr>
    <tr>
        <td class="lable">expired date</td>
        <td><input type="date" name="expriced_date"   value="<?php echo $item['expriced_date' ]  ?>"></td>
    </tr>
    <tr>
        <td class="lable">note</td>
        <td><input type="text" name="note"   value="<?php echo $item['note' ] ?>"></td>
    </tr>
    <tr>
        <td colspan="2" style="color: red;" >

        </td>
    </tr>
    <tr>
    <button><a href="http://localhost/examphp/home/index">homepage</a></button><br>
        <td colspan="2" ><input style="width: 100%;" type="submit" name="submit" value="save"></td>
    </tr>
</table>


</form>
</body>
</html>