<?php

	$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 
                  'August', 'September', 'October', 'November', 'December');
	foreach ($arr as $value) {
		if ($value == date("F")) {
			echo "<b>$value</b><br>";
		}
      else {
    echo $value . "<br>";
    
}
	}
?>