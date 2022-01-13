<?php
// モニター用のパス
// http://localhost/algorithm_training/two_dimensional_array.php
// P.58～
$arr_a = [];
$arr_b = [];
// 初期値を1とする
$i = 1;
$j = 1;
$max_arr_a = 6;
$max_arr_b = 5;
for ($i; $i <= $max_arr_a; $i++) {
  $arr_a[$i] = $i;
  for ($j; $j <= $max_arr_b; $j++) {
    $arr_b[$j] = $j;
  }
  $arr_a[$i] = $arr_b;
}

echo ('<pre>');
var_dump($arr_a);
echo ('</pre>');
