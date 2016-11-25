<?php

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$string = '';
	foreach ($arr as $value) {
		if ($value == 3 || $value == 6 || $value == 9) {
			$string .= $value . '<br>';
		}
		else {
			$string .= $value . ', ';
		}
}
	 echo $string;
 ?>