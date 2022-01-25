<?php
// P128_P131:最大公約数の算出(PHP編)
// ユークリッドの互除法を表現
// $mと$nに代入する値は $m > $n > 0 となるように設定すること
// $m = 96;
// $n = 36;
// $r = "";
// $i = 0;
// echo '$m =' . $m . '、' . '$n =' . $n . 'であるとき<br>';
// echo '//ループここから↓--------------------<br>';
// while ($r !== 0) {
//   $r = $m % $n;
//   var_dump($r);
//   echo '<br>';
//   $m = $n;
//   $n = $r;
//   $i++;
//   printf('ループ' . $i . '回<br>');
// }
// echo '//ループここから↑--------------------<br>';
// echo '最大公約数 = ' . $m;



// $m = 175;
// $n = 77;
// $r = "";
// $i = 0;
// echo '$m =' . $m . '、' . '$n =' . $n . 'であるとき<br>';
// echo '//ループここから↓--------------------<br>';
// while ($r !== 0) {
//   $r = $m % $n;
//   var_dump($r);
//   echo '<br>';
//   $m = $n;
//   $n = $r;
//   $i++;
//   printf('ループ' . $i . '回<br>');
// }
// echo '//ループここから↑--------------------<br>';
// echo '最大公約数 = ' . $m;

//do...while文で表現----------------------------------------
// $m = 175;
// $n = 77;
// $r = "";
// $i = 0;
// echo '$m =' . $m . '、' . '$n =' . $n . 'であるとき<br>';
// echo '//do...whileループここから↓--------------------<br>';
// do {
//   $r = $m % $n;
//   var_dump($r);
//   echo '<br>';
//   $m = $n;
//   $n = $r;
//   $i++;
//   printf('ループ' . $i . '回<br>');
// } while ($r !== 0);
// echo '//ループここから↑--------------------<br>';
// echo '最大公約数 = ' . $m;


// P.131------------------------------
$m = 96;
$n = 36;
$r = $m % $n;
$i = 0;
echo '$m =' . $m . '、' . '$n =' . $n . 'であるとき<br>';
echo '//ループここから↓--------------------<br>';
while ($r !== 0) {
  var_dump($r);
  echo '<br>';
  $m = $n;
  $n = $r;
  $r = $m % $n;
  $i++;
  printf('ループ' . $i . '回<br>');
}
echo '//ループここから↑--------------------<br>';
echo '最大公約数 = ' . $n;
