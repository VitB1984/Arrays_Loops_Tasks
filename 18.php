<?php
	$arr = array('��', '��', '��', '��', '��', '��', '��');
	
    foreach ($arr as $key => $value) {
		
        if ($key == 5 or $key == 6) {
			echo "<b>$value</b><br>";
		}
		else {
			echo $value.'<br>';
		}
	}
?>