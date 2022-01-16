<?php
// メイン処理のファイルを読み込み
// include('two_dimensional_array.php');
// 会社概要一覧を読み込み
include('list_of_compnanies.php');

// 年間売上高区分
// ～千万を～百円とみなしてあらかじめデータを入力する
// メインファイル内のfor分で使用している$kを使用する
$u = 0;
$anual_sales = $companies[$k][3];
// var_dump($k);
// var_dump($anual_sales);
if ($anual_sales < 300) {
  $u = 1;
} elseif ($anual_sales < 1000) {
  $u = 2;
} elseif ($anual_sales < 10000) {
  $u = 3;
} elseif ($anual_sales < 50000) {
  $u = 4;
} else {
  $u = 5;
}
