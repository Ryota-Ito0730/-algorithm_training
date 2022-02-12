<?php
// P156_P163 挿入ソート

$a = [25, 34, 53, 65, 87, 91, 40];
$n = count($a);
$tmp = '';
$i = '';
$j = '';
$loop = '';
for ($i = 1; $i  <= $n; $i++) {
  $tmp = $a[$i];
  $j = $i - 1;
  $loop = true;
  while ($j >= 0 && $loop == true) {
    if ($a[$j] > $tmp) {
      $a[$j + 1] = $a[$j];
      $j = $j - 1;
    } else {
      $loop = false;
    }
  }
  $a[$j + 1] = $tmp;
}
echo '<pre style="font-size:22px;">';
var_dump($a); 
echo '</pre>';
