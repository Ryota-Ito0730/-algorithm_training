<?php
// モニター用のパス
// http://localhost/algorithm_training/two_dimensional_array.php
// P.58～
$arr_a = [];
$arr_b = [];
// 初期値を1とする
// 配列の行にあたる値(j)は初期値0で埋めておく
$i = 1;
$j = 1;
$max_arr_a = 6;
$max_arr_b = 5;
for ($i; $i <= $max_arr_a; $i++) {
  $arr_a[$i] = $i;
  for ($j; $j <= $max_arr_b; $j++) {
    $arr_b[$j] = 0;
  }
  $arr_a[$i] = $arr_b;
}
// 会社概要一覧を読み込み
include('list_of_compnanies.php');
//会社の総数を確認(その総数分だけ繰り返し区分わけする)
$max = count($companies);
$k = 1;
$sum = 0;
for ($k; $k <= $max; $k++) {
  // 資本金区分ファイルを読み込み
  include('capital_classification.php');
  // 年間売上高区分ファイルを読み込み
  include('annual_sales_category.php');
  $sk = ++$sum;
  $arr_a[$s][$u] = $sk;
  var_dump($sk);
  $sum = 0;
}
echo ('<pre>');
var_dump($arr_a);
var_dump($companies);
echo ('</pre>');
