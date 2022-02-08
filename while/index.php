<?php
//-------- while文の記載パターンについて思いつく限り列挙

// $i が10以下である内だけループさせる
// $i = 0;
// while ($i <= 10) {
//   var_dump($i);
//   echo $i . '<br>';
//   $i++;
// }

// $bool に trueが入っている間だけループさせる
// $i = 1;
// $bool = true;
// while ($bool) {
//   var_dump($i);
//   $bool_str = $bool ? 'true' : 'false';
//   echo $i . '回目' . $bool_str . '<br>';
//   $i++;
//   if ($i > 10) {
//     $bool = false;
//   }
// }

// $array の中身が配列、かつ、その配列に値が格納されている間だけループ
$array = ['リンゴ', 'ゴリラ', 'ラッパ', 'パイナップル', 'ルビー'];
$i = 1;
while (is_array($array) && !empty($array)) {
  echo $i . '回目' . ' ' . $array[0] . '<br>';
  array_shift($array);
  $i++;
}
