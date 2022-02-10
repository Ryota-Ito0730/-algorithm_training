<?php
// // P144_P151 2分探索(binary search、BS)
// $tmp_t = [3, 4, 5, 6, 10, 12, 15, 20];
// $t = [];
// // インデックス番号1からスタートする配列を作る
// $n = count($tmp_t);
// $i = 1;
// for ($i; $i <= $n; $i++) {
//   $t[$i] = $tmp_t[$i - 1];
// }

// // 探索する値が配列のインデックス番号の何番に格納されているかを$idxに格納して処理を終了する
// $data = 15; // 探索する数値
// $mid = '';
// $low = 1;
// $high = $n; // 配列の要素数 ÷ 2の値を探索する中央とする
// $idx = 0;
// while ($low <= $high && $idx == 0) {
//   $mid = floor(($high + $low) / 2);
//   if ($data == $t[$mid]) {
//     $idx = $mid;
//   } else {
//     if ($data > $t[$mid]) {
//       $low = $mid + 1;
//     } else {
//       $high = $mid - 1;
//     }
//   }
// }
// if ($idx !== 0) {
//   echo $data . 'は、配列$tのインデックス' . $idx . '番目に格納されています。';
// } else {
//   echo '該当なしです';
// }


// P151ハッシュ探索法
function mod($key_val, $hash_val)
{
  return array_sum($key_val)  % $hash_val;
}
$key_arr = [5, 4, 3, 2, 1]; // 任意の階乗表現の値を入力
$hash = 13; // 任意の数字(ここがハッシュ表のマスの数になる)
// echo mod($key_arr, $hash);

// ハッシュ表を作り0埋めする
$hash_table = range($hash - $hash, $hash - 1);
for ($i = 0; $i < $hash; $i++) {
  $hash_table[$i] = 0;
}
// ハッシュ値に沿ったインデックス番号にキー値に紐づくデータを入力
$key = implode('', $key_arr);
// var_dump($key);
$hash_table[mod($key_arr, $hash)] = [$key => '紐づくデータ'];
var_dump($hash_table);
