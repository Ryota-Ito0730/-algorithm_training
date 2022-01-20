<?php
include("./station_name_sign.php");
// 駅リストを元に料金表を作成する
$max = count($array_station_name_sign);
$fares_y = [];
$fares_x = [];
$i = 1;
$j = 1;
for ($i; $i <= $max; $i++) {
  $fares_y[$i] = $i;
  for ($j; $j <= $max; $j++) {
    $fares_x[$j] = $j;
  }
  $fares_y[$i] = $fares_x;
  $j = 1;
}
$k = 1;
// 中央線部分を0で埋める
for ($k; $k <= $max; $k++) {
  $fares_y[$k][$k] = 0;
};

// 中央線右半分の料金を埋める(10えんずつあげる)
$l = 1;
$m = 2;
for ($l; $l <= $max - 1; $l++) {
  for ($m; $m <= $max; $m++) {
    $fares_y[$l][$m] = 10 * ($m - 1);
  }
  $m = 2 + $l;
};

// 中央線左半分の料金を埋める(10えんずつあげる)
// forの回転数を決定する変数
$l = 2;
$m = 1;
// インデックスを指定する変数
$n = 1;
for ($l; $l <= $max; $l++) {
  for ($m; $m <= $max - ($max - $n); $m++) {
    $fares_y[$l][$m] = 10 * $m;
  }
  $m = 1;
  ++$n;
};

echo '↓配列$fares_y(料金表)の処理結果' . '<br>';
$y = 1;
$z = 1;
for ($y; $y <= $max; $y++) {
  // $fares_y[$y];
  for ($z; $z <= $max; $z++) {
    echo $fares_y[$y][$z] . ' | ';
  }
  echo '<br>';
  $z = 1;
}
// echo "<pre>";
// var_dump();
// echo "</pre>";