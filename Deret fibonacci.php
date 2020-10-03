<h2>Deret Fibonacci 1-10</h2>
<?php

$deret[1] = 4;
$deret[2] = 7;
$hasil=NULL;

 $hasil .= "$deret[1], $deret[2]";
 for($i=3;$i<=10;$i++)
 {
  $a=$i-1;
  $b=$i-2;

  $deret[$i] = $deret[$a] + $deret[$b];
  $hasil .= ", $deret[$i]";
 }
 echo "<div style='color:blue'>$hasil</div>";
?>