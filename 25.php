<?php

$arr = array();
for ($i=0; $i<=5; $i++) {
    $arr[] = rand(0, 50);
}
echo "<pre>";
print_r($arr);
echo "<pre>";
 
$min = min($arr); //min value
$max = max($arr); //max value

echo $min . "<br>";
echo $max . "<br>";
 
$valueMin = array_search($min, $arr);
$valueMax = array_search($max, $arr);
 
$arr[$valueMin] = $max;
$arr[$valueMax] = $min;
 
echo "<pre>";
print_r($arr);
echo "<pre>";

?>