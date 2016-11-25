<?php

$arr = array();
for ($i=0; $i<5; $i++) {
    $arr[] = rand(1, 100);  
}
$a=1;
for($j=0; $j < count($arr); $j=$j+2) {
    if($arr[$j] > 0) {
	    $a = $a * $arr[$j];

    }
}

echo $a . "<br>";
echo "<pre>";
print_r($arr);
echo "<pre>";

for($k=1; $k < count($arr); $k=$k+2) {
         if($arr[$k] > 0) {
echo "Элементы, которые больше ноля и у которых не парный
индекс - это " . $arr[$k] . "<br>"; 
    }
}


?>