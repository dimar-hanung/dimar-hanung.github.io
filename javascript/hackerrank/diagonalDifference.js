//input : Matrix array =
// 1 2 3
// 4 5 6
// 9 8 9

//output = 2

//kenapa ?
// 1 + 5 + 9 = 15,
// 3 + 5 + 9 = 17
//15 - 17 = 2
//intinya menyilang (diagonal);

console.log(
  diagonalDifference([
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
  ])
);

function diagonalDifference(arr) {
  let leftDiagonal = 0;
  let rightDiagonal = 0;
  let output = 0;

  for (a in arr) {
    let b = arr.length - a - 1;
    leftDiagonal += arr[a][a];
    rightDiagonal += arr[a][b];
    // console.log(arr[a][b]);
  }

  return Math.abs(leftDiagonal - rightDiagonal);
}
