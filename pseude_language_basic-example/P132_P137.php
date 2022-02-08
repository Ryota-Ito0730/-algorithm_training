<?php
// P132_P137:文字のカウント
// $alphabet_array = ['a', 'b', 'c', 'd', 'e', 'f',  'g',  'h',  'i',  'j',  'k',  'l',  'm',  'n',  'o',  'p',  'q',  'r',  's',  't',  'u',  'v',  'w',  'x',  'y',  'z'];
// // 文字配列(#が選択された時点で処理は終了を示す)
// $moji_array = [1 => 'g', 2 => 'i', 3 => 'j', 4 => 'i', 5 => 'g', 6 => 'e', 7 => 'n', 8 => 'g', 9 => 'o', 10 => '#'];
// $max = count($alphabet_array); // 26
// $count_array = [];
// $i = 1;
// $j = 1;
// // 文字列のカウント結果を格納する配列を0埋め
// for ($j; $j <= $max; $j++) {
//   $count_array[$j] = 0;
// }
// $i = 1;
// while ($moji_array[$i] !== '#') {
//   $j = 1;
//   while ($alphabet_array[$j] !== $moji_array[$i]) {
//     // var_dump($j);
//     $j++;
//   }
//   $j++;
//   $count_array[$j] = $count_array[$j] + 1;
//   $i++;
// }
// $j = 1;
// for ($j; $j <= $max; $j++) {
//   if ($count_array[$j] !== 0) {
//     echo '文字' . $alphabet_array[$j - 1] . '  ' . $count_array[$j] . '個<br>';
//   }
// } 
// $count_result = array_combine($alphabet_array,  $count_array);
// echo '<pre>';
// // var_dump($count_array);
// var_dump($count_result);
// echo '</pre>';


// P137 数字文字から数値への変換

// 変換したい数字文字を$mに格納(例えば'7'を数値に変換する)
$m = '0';
function Henkan($arg01)
{
  $i = 0;
  $digit = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
  while ($arg01 !== $digit[$i]) {
    ++$i;
  }
  return ($i + 1) % 10;
}

Henkan($m);
