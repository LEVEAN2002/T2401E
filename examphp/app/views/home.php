<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{margin: 0;
        padding: 0;}
        body{width: 700px;
            margin: 20px auto;}
        h1{font-size: 20px;
            padding: 5px}
        table{width: 80%;}
        tr{height: 30px;}
        .tr{background-color: brown;
            font-weight: bold;
            color: white;
            }
    </style>
</head>
<body>
    <div style="background-color: brown;"><h1 style="color:white"  >vstore_iten</h1></div>
    <center><h1 style="color:darkkhaki" >sale items</h1></center>
    <button style="background-color: brown;" ><a href="http://localhost/examphp/admin/admin" style="text-decoration: none; color:white ; " >add new</a></button>
  
  <table>
<tr class="tr">
    <td>id</td>
    <td>item code</td>
    <td>item name</td>
    <td>quantity</td>
    <td>expriced date</td>
    <td>note</td>
    <td>action</td>
</tr>
  <?php
   foreach ($data as $dataitem):
    ?> 
<tr>
    <td><?php echo $dataitem ->id ?></td>
    <td><?php echo $dataitem ->item_code ?></td>
    <td><?php echo $dataitem ->item_name ?></td>
    <td><?php echo $dataitem ->quantity ?></td>
    <td><?php echo $dataitem ->expired_date ?></td>
    <td><?php echo $dataitem ->note ?></td>
    <td><button><a href="http://localhost/examphp/admin/admin?edit=<?php echo $dataitem ->id ?>">edit</a></button></td>
</tr>

<?php endforeach; ?>
     </table>
<table></table>
</body>
</html>