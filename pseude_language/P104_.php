<?php
// P104 順次処理-----
// 変数の宣言
// $a = 0;
// $b = 0;
// $c = 0;

// // 変数へ値を入力
// $a = 10;
// $b = 15;
// $c = $a + $b;
// var_dump($c);

// P106 真偽判定-----
// $a = 0;
// $r = 0;
// $g = '';
// $k = '';
// // 変数$aに値を入力する
// $a = 5;
// $r = $a - ($a / 2 * 2);
// if ($r === 0) {
//   $g = $r;
//   echo '変数$gには' . $g . 'がはいっていて偶数でした';
// } else {
//   $k = $r;
//   echo '変数$kには' . $k . 'がはいっていて奇数でした';
// }

//P108-----mod関数(基本情報技術者試験独自のあまりを求める関数の表記のこと)
// function mod($arg01, $arg02)
// {
//   return '余りは' . $arg01 % $arg02 . 'です';
// }

// $a = 11;
// $b = 2;
// echo mod($a, $b);

// P.120
$a = '';
$b = '';
$syou = '';

$syou = 0;
$a = 11;
$b = 3;
while ($a >= $b) {
  $a = $a - $b;
  $syou = $syou + 1;
}


echo '商($syou)は' . $syou . 'です<br>';
echo '余り($a)は' . $a . 'です';
