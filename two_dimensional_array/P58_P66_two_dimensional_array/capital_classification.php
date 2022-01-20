<?php
// メイン処理のファイルを読み込み
// include('two_dimensional_array.php');
// 会社概要一覧を読み込み
include('list_of_compnanies.php');

// 資本金区分
// ～千万を～百円とみなしてあらかじめデータを入力する
// メインファイル内のfor分で使用している$kを使用する
$s = 0;
$classification = $companies[$k][2];

// var_dump($k);
// var_dump($classification);

if ($classification < 300) {
  $s = 1;
} elseif ($classification < 1000) {
  $s = 2;
} elseif ($classification < 10000) {
  $s = 3;
} elseif ($classification < 50000) {
  $s = 4;
} elseif ($classification < 100000) {
  $s = 5;
} else {
  $s = 6;
}
