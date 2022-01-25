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
var_dump($alphabet_array);
$alphabet_array_length = count($alphabet_array);
$ai = 1;
for ($ai; $ai <= $alphabet_array_length; $ai++) {
  $alphabet_array[$ai] = $alphabet_array[$ai - 1];
}
var_dump($alphabet_array);
