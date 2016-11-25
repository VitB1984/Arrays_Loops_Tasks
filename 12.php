<?php
// using while
 $n = 1000;
 $i = 0;
  while ($n > 50) {
		$i++;
		$n = $n / 2;
	}

	echo $i.'<br>';
	echo $n;

// using for
 for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);

	echo $i.'<br>'; 
	echo $num;

?>