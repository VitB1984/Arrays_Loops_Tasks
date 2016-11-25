<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	foreach ($arr as $key=>$elem) {
		$en[] = $key;
		$ru[] = $elem;
	}
    foreach ( $en as $val ) {
   echo $val . "<br>";
}

 foreach ( $ru as $val ) {
   echo $val . "<br>";
   }
?>
