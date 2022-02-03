<?php
// P132_P137:文字のカウント
$alphabet_array = [
  'a',
  'b',
  'c',
  'd',
  'e',
  'f',
  'g',
  'h',
  'i',
  'j',
  'k',
  'l',
  'm',
  'n',
  'o',
  'p',
  'q',
  'r',
  's',
  't',
  'u',
  'v',
  'w',
  'x',
  'y',
  'z'
];
// 文字配列(#が選択された時点で処理は終了を示す)
$moji_array = [1 => 'g', 2 => 'i', 3 => 'j', 4 => 'i', 5 => 'g', 6 => 'e', 7 => 'n', 8 => 'g', 9 => 'o', 10 => '#'];

$max = count($alphabet_array); // 26
$count_array = [];
$i = 1;
$j = 1;
// 文字列のカウント結果を格納する配列を0埋め
for ($j; $j <= $max; $j++) {
  $count_array[$j] = 0;
}

$i = 1;
while ($moji_array[$i] !== '#') {
  $j = 1;
  while ($alphabet_array[$j] !== $moji_array[$i]) {
    // var_dump($j);
    $j++;
  }
  $j++;
  $count_array[$j] = $count_array[$j] + 1;
  $i++;
}

$count_result = array_combine($alphabet_array,  $count_array);

echo '<pre>';
// var_dump($count_array);
var_dump($count_result);
echo '</pre>';
