<?php
// // P138_P143 線形探索(Linear search)
// $tbl = [5, 3, 2, 4, 1, 7]; // 線形探索の対象となる配列
// $n = count($tbl); // 線形探索の対象となる配列の要素数
// $x = 20; // 線形探索で探す対象の値
// // 一致したらその値を表示し、見つからない場合は該当なしと表示する
// $i = 1;
// while ($i <= $n && $tbl[$i - 1] !== $x) {
//   ++$i;
// }
// if ($i > $n) {
//   echo '該当なし';
// } else {
//   echo $i;
// }

// P142_番兵法(sentinel_loop)を用いた線形探索
$tbl = [5, 3, 2, 4, 1, 7]; // 線形探索の対象となる配列
$n = count($tbl); // 線形探索の対象となる配列の要素数
array_push($tbl, '#'); // 配列の最後に番兵をセット

$x = 5; // 線形探索で探す対象の値

$i = 1;
while ($tbl[$i - 1] !== '#' && $tbl[$i - 1] !== $x) {
  ++$i;
}
if ($i > $n) {
  echo '失敗';
} else {
  echo $i . '　成功';
}
