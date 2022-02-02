<?php
// 複数のimgタグを一斉に出力するまでの処理サンプル
// 前提:imgタグを配列として用意し、その内容を2倍に増やす→その配列を文字列化後、echoで一斉に出力する

// imgフォルダに格納した画像and相対パスを組み合わせた文字列を配列として取得
$dir = './img/';
$filelist = glob($dir . '*');
// $filelistに格納したデータをさらにimgタグに埋め込みimgタグの配列として用意
$i = 0;
$images = [];
foreach ($filelist as $value) {
  // var_dump($value);
  $images[$i] = '<img style=width:20%; src=' . $value . '>';
  $i++;
}
// imgタグが入った配列を2倍の量に増やす
$array_img_double = array_merge($images, $images);
// 上記配列の要素を文字列化
$array_img_text =  implode($array_img_double);

// サンプルファイルの装飾:余計な余白を削除(これはプロジェクトには不要)
echo '<body style=margin:0;padding:0;>';
// 最終的に文字列化した画像パスが入ったimgタグを一斉出力
echo $array_img_text;


// 離れた要素内(例えば別セクション)にも同様の内容で出力できる
echo $array_img_text;
echo '</body>';
