<?php
	$arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday',
                  'Friday', 'Saturday'); 
	$day = date("l");//��������� ����� ����� ����, ��� ��� ������ ���������� 
    //������ � ���������� ����������� ���� - ������� ��������.
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