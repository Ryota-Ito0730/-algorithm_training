<?php
include("./station_name_sign.php");


// 下記変数は一時的に設置するが、処理を完成後、メインファイルに移動させること
$station_name01 = 'ツダヌマ';
$station_name02 = 'ハカタ';
$x = 1;
$max = count($array_station_name_sign);
for ($x; $x <= $max; $x++) {
  if ($array_station_name_sign[$x] == $station_name01) {
    return $x;
  }
}
