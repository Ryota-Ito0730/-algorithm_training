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