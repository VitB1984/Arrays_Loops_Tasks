<?php

$arr = array('green'=>'�������', 'red'=>'�������','blue'=>'�������');
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
