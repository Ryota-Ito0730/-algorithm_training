<?php
// P152_P155 バブルソート
// PHPではソート処理についての関数が用意されているため、目的に沿った関数を使用するのもアリ
// https://www.php.net/manual/ja/array.sorting.php

// ランダムな値が入った配列に対してバブルソートを行う
$t = [5, 4, 21, 2, 6, 7, 8, 3, 10];
// 配列$tのインデックスを1スタートにできるよう処理する
$t_keys = range(1, count($t));
$t = array_combine($t_keys, $t);
$n = count($t);
$i = $n;
while ($i > 1) {
  $j = 1;
  while ($j < $i) {
    if ($t[$j] > $t[$j + 1]) {
      $w = $t[$j];
      $t[$j] = $t[$j + 1];
      $t[$j + 1] = $w;
    }
    $j = $j + 1;
  }
  $i = $i - 1;
}
echo '<pre style="font-size:22px;">';
var_dump($t);
echo '</pre>';
