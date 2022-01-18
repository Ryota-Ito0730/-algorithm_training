<?php
// P68～P73までの比較ループをコードで表現する
// 予め比較元の値を入れた配列array_tを用意
$array_t = [1 => 23, 2 => 35, 3 => 18, 4 => 50];
$max = count($array_t);
$array_q = [];
// 比較した結果の降順の順位番号を入れる。初期値は1で埋める
$i = 0;
for ($i; $i < $max; $i++) {
  $array_q[$i + 1] = 1;
}
var_dump($array_q);

$j = 1;
for ($j; $j <= $max - 1; $j++) {
  $tk =  $array_t[$j];
  $tl =  $array_t[$j + 1];
  if ($tk < $tl) {
    $array_q[$j] = $array_q[$j] + 1;
  } elseif ($tk > $tl) {
    $array_q[$j + 1] = $array_q[$j + 1] + 1;
  }
}

echo '<pre>';
var_dump($array_q);
echo '</pre>';


echo '↓配列Qの処理結果' . '<br>';
$k = 1;
for ($k; $k <= $max; $k++) {
  echo $array_q[$k];
}
