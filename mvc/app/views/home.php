<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .img{width: 100px;
            border-radius: 10px;}
        .cont{display: flex;
            margin-top: 100px;
            flex-wrap: wrap;
             width: 50%;
            margin: 0 auto;}
        
        .item{
            flex:16% ;
            
        }
        .logo{width: 100%;
            height: 500px ;
  
        margin-top: 100px;}
        .item-dh{
            width: 24%;
            text-align: center;
        }
        #item-dh-img{width: 70%;}
        .album{display: flex;
            width: 60%;
            flex-wrap: wrap;
            margin: 100px auto;
            justify-content: space-between;}
        .item-dh{flex: 24%;}
        .item-dh.div{width: 90%;}
        .describe{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            width: 70%;
            margin: 20px auto;
            text-align: justify;
        }
        .price{
            color: red;
            font-size: 18px;
            margin-bottom: 20px;
        }
        #img2 {
            position: absolute;
            top: 0;
            left: 0;
            display: none;
}

    </style>
</head>

<body>

    <hr>
<img class="logo" src="https://image.donghohaitrieu.com/wp-content/uploads/2024/01/KOI-Noble.jpg" alt="faile">
<div class="cont">
<?php 

$hbodylist=($data["data1"]);

foreach ($hbodylist as $hbody):?>
    
    <div class="item">
        <div><img class="img" src="<?php echo $hbody ->link ?>" alt=""></div>
        <div><?php echo $hbody ->mota ?></div>
    </div>

 
   <br>
<?php endforeach ?>
</div>
<center><h1 style="margin-top: 100PX;" >
<hr><br>    
CÁC MẪU ĐỒNG HỒ MỚI VỀ</h1></center>

<div class="album">
  
   
<?php
$sanphamdonghos = ($data["data2"]);

foreach ($sanphamdonghos as $sanphamdongho): ?>
  <a class="item-dh" href="http://localhost/mvc/product/sanphamdh?id=<?php echo $sanphamdongho->id ?>" target="_blank" rel="noopener noreferrer">
    <div>
      <img id="item-dh-img" src="<?php echo $sanphamdongho->img1 ?>" alt="faile" class="img-hover" data-alt-src="<?php echo $sanphamdongho->img2 ?>">
    </div>

    <div class="describe"><?php echo $sanphamdongho->fullname ?></div>
    <div class="price"><?php echo number_format($sanphamdongho->priceshop, 0, '.', '. ') . "$" ?></div>
  </a>

  <br>
<?php endforeach ?>
<script>
const hoverImages = document.querySelectorAll('.img-hover');

hoverImages.forEach((image) => {
  const originalSrc = image.src; // Store the original image URL
  const altSrc = image.getAttribute('data-alt-src');

  image.addEventListener('mouseover', () => {
    image.src = altSrc;
    image.style.transition = 'opacity 0.5s'; // Add a transition effect
    image.style.opacity = 0; // Set opacity to 0 to create a fade-in effect
    setTimeout(() => {
      image.style.opacity = 1; // Set opacity back to 1 after transition
    }, 50);
  });

  image.addEventListener('mouseout', () => {
    image.src = originalSrc; // Display the original image again
    image.style.transition = 'opacity 0.5s'; // Add a transition effect
    image.style.opacity = 0; // Set opacity to 0 to create a fade-out effect
    setTimeout(() => {
      image.style.opacity = 1; // Set opacity back to 1 after transition
    }, 50);
  });
});
</script>


</div>
<hr>
</body>
</html>