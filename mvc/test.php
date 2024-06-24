<?php
$a1=1;
$a2=3;
$a3=6;


$a1 = rand(1,6);
$a2 = rand(1,6);
$a3 = rand(1,6);
echo $a1.$a2.$a3."<br>";

echo $a1+$a2+$a3 ."<br>";
if($a1+$a2+$a3<=10){
    echo "xiu";
}
else {
    echo"tai";
}

?>