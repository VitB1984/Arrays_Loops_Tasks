<?php
 //using for
 echo "<table>";

 for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
   
   for ($j = 1; $j <= 9; $j++) {
    echo "<td>" . ($i*$j) . "</td>"; 
  }
    echo "</tr>"; 
 } 
 echo "</table>";

 
 //using while
/*
 echo "<table>";
 
$i=1;
 while ($i<=9) {
  echo "<tr>";  
$j=1;
    while ($j<=9) {
  echo "<td>" . ($i*$j) . "</td>";
 $j++;
 }     
    echo "</tr>";
$i++;
} 
echo "</table>";
*/
?>
