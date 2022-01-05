'use strict';
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
let int = [1, 2, 3, 4, 5];
let w = '';
let n = int.length - 1;
w = int[0];
for (let i = 0; i < n; i++) {
  int[i] = int[i + 1];
  console.log(int);
}
int.push(w);
console.log(int);