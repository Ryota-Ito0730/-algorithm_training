'use strict';
// P29(ﾄﾞ・モルガンの法則)
/******
*通常の処理
******/
// let a = 0;
// if (a > 0) {
//   // 変数aの値が1以上だとここを通る
//   console.log("Yes!!")
// } else {
//   // 変数aの値が0以下だとここを通る
//   console.log("No!!")
// }

/******
*否定条件を使用した等価の処理
******/
// let a = 0;
// if (!(a > 0)) {
//   // 変数aの値が0以下だとここを通る
//   console.log("Yes!!");
// } else {
//   // 変数aの値が1より大きいとここを通る
//   console.log("No!!");
// }

/******
*比較演算子逆転させた等価の処理
******/
// let a = 0;
// if (a <= 0) {
//   // 変数aの値が0だとここを通る
//   console.log("Yes!!")
// } else {
//   // 変数aの値が0だとここを通る
//   console.log("No!!")
// }

/******
*P30～4-3 繰り返し判定の解釈1-終了条件と反復条件
******/
// let x = 1;
// let n = 1;
// for (n; n <= 5; n++) {
//   console.log("x in for", x)
//   console.log("n in for", n);
//   x = x * n;
// }
// console.log("outside for : n", n);


/******
* page34～評価ABCを付ける処理
******/
// P.35の流れ図を表現(評価範囲を明示的に記載するとif分の順序を気にしなくても良いが、それだけ可読性に影響する)
// let a, b, c, d;
// [a, b, c, d] = ["評価A", "評価B", "評価C", "評価D"];
// let ten = 100;

// if (ten <= 59 && ten >= 0) {
//   console.log(d);
// } else if (ten <= 69 && ten >= 60) {
//   console.log(c);
// } else if (ten <= 79 && ten >= 70) {
//   console.log(b);
// } else if (ten <= 100 && ten >= 80) {
//   console.log(a);
// }

// 上記の評価範囲が広い順、かつ値の大きい順で並び替えをする
// let a, b, c, d;
// [a, b, c, d] = ["評価A", "評価B", "評価C", "評価D"];
// let ten = 80;
// if (ten >= 80) {
//   console.log(a);
// } else if (ten >= 70) {
//   console.log(b);
// } else if (ten >= 60) {
//   console.log(c);
// } else {
//   console.log(d);
// }

// P.36/37の誤った流れ図を表現
let a, b, c, d;
[a, b, c, d] = ["評価A", "評価B", "評価C", "評価D"];
let ten = 59;
if (ten >= 60) {
  console.log(c);
} else if (ten >= 70) {
  console.log(b);
} else if (ten >= 80) {
  console.log(a);
} else {
  console.log(d);
}

// page48～
// let str = ['R', 'I', 'C', 'H', 'T', 'E', 'L', 'E', 'C', 'O', 'M'];
// let max = str.length / 2;
// let w = "";
// let j = str.length - 1;
// console.log(str);
// for (let i = 0; i < max; i++) {
//   w = str[i];
//   str[i] = str[j];
//   str[j] = w;
//   j--;
// }
// console.log(str);

// page51～
// let int = [1, 2, 3, 4, 5];
// let w = '';
// let n = int.length - 1;
// w = int[0];
// for (let i = 0; i < n; i++) {
//   int[i] = int[i + 1];
//   console.log(int);
// }
// int.push(w);
// console.log(int);