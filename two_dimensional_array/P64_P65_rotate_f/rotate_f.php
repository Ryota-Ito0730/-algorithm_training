<?php
// F字に見えるよう出力される表を作る
//5 * 5 の表
$x = 5;
$y = 5;
$i = 1;
$j = 1;
$array_a = [];
$array_b = [];
for ($i; $i <= $x; $i++) {
  $array_a[$i] = $i;
  for ($j; $j <= $y; $j++) {
    $array_b[$j] = '〇';
  }
  $array_a[$i] = $array_b;
}

$array_a[1][2] = '●';
$array_a[1][3] = '●';
$array_a[1][4] = '●';
$array_a[2][2] = '●';
$array_a[3][2] = '●';
$array_a[3][3] = '●';
$array_a[3][4] = '●';
$array_a[4][2] = '●';
$array_a[5][2] = '●';

// echo ('<pre>');
// var_dump($array_a);
// echo ('</pre>');

// 普通のF字
$w = 5;
$z = 5;
$k = 1;
$l = 1;
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    if ($l <= 4) {
      echo $array_a[$k][$l];
    } elseif ($l >= 5) {
      echo $array_a[$k][$l] . '<br>';
    }
  }
  $l = 1;
}

echo '<br>';

// F字を左右反転
$w = 5;
$z = 5;
$k = 1;
$l = 1;
$array_c = [];
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    $array_c[$k][5 - $l + 1] = $array_a[$k][$l];
  }
  $l = 1;
}
$k = 1;
$l = 1;
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    if ($l <= 4) {
      echo $array_c[$k][$l];
    } elseif ($l >= 5) {
      echo $array_c[$k][$l] . '<br>';
    }
  }
  $l = 1;
}

echo '<br>';

// F字を右側へ90度回転
$w = 5;
$z = 5;
$k = 1;
$l = 1;
$array_c = [];
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    $array_c[$l][5 - $k + 1] = $array_a[$k][$l];
  }
  $l = 1;
}
$k = 1;
$l = 1;
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    if ($l <= 4) {
      echo $array_c[$k][$l];
    } elseif ($l >= 5) {
      echo $array_c[$k][$l] . '<br>';
    }
  }
  $l = 1;
}

echo '<br>';

// F字を右側へ180度回転
$w = 5;
$z = 5;
$k = 1;
$l = 1;
$array_c = [];
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    $array_c[5 - $k + 1][5 - $l + 1] = $array_a[$k][$l];
  }
  $l = 1;
}
$k = 1;
$l = 1;
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    if ($l <= 4) {
      echo $array_c[$k][$l];
    } elseif ($l >= 5) {
      echo $array_c[$k][$l] . '<br>';
    }
  }
  $l = 1;
}

echo '<br>';

// F字を右側へ270度回転
$w = 5;
$z = 5;
$k = 1;
$l = 1;
$array_c = [];
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    $array_c[5 - $l + 1][$k] = $array_a[$k][$l];
  }
  $l = 1;
}
$k = 1;
$l = 1;
for ($k; $k <= $w; $k++) {
  for ($l; $l <= $z; $l++) {
    if ($l <= 4) {
      echo $array_c[$k][$l];
    } elseif ($l >= 5) {
      echo $array_c[$k][$l] . '<br>';
    }
  }
  $l = 1;
}
