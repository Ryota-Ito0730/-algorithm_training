<?php
include("./station_name_sign.php");
include("./input_01.php"); //$station_name01の値が入ってくる
include("./input_02.php"); //$station_name02の値が入ってくる

// 外部からの配列：$array_station_name_sig
// 外部から入力された駅名$station_name01



// $x = station_searcher($array_station_name_sign, $station_name02);
function station_searcher($station_name_arr, $station_name)
{
  $x = 1;
  $max = count($station_name_arr);
  for ($x; $x <= $max; $x++) {
    if ($station_name_arr[$x] == $station_name) {
      return $x;
    }
  }
}
