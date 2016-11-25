<?php
	$arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday',
                  'Friday', 'Saturday'); 
	$day = date("l");//спецально делаю через дату, так как просто определить 
    //самому в переменной сегодняшний день - слишком банально.
    foreach ($arr as $key => $value) {
		
        if ($day == $value) {
            $value = $day;
			echo "<b>$value</b><br>";
		}
		else {
			echo $value.'<br>';
		}
	}
?>