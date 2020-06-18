//Input:

// 73
// 67
// 38
// 33

// output :
// 75
// 67
// 40
// 33

// Ketentuan :
// -> Nilai adalah 0 - 100
// -> Nilai kurang dari 40 adalah gagal

// Cara Kerja :
// Jika Nilai dikurangi kelipatan 5 = kurang dari 3 ,maka dibulatkan ke atas (per kelipatan 5)

//Contoh :
// 73 = 75 karena 5 - 3 = 2 (kurang dari 3)
// 67 = 67 karena 5 - 2 = 3 (sama dengan 3)
// 38 = 40 karena 5 - 3 = 2 (kurang dari 3), walaupun nilai awal kurang dari 40 tapi hasil nya >= 40
// 33 = 33 walaupun 5 - 3 = 2 (kurang dari 3), tapi hasil <= 40 , makanya hasil tidak berubah

console.log(gradingStudent([73, 67, 38, 33]));

function gradingStudent(grades) {
  for (let i = 0; i < grades.length; i++) {
    if (grades[i] % 5 > 2) {
      let rounding = Math.abs((grades[i] % 5) - 5);
      let result = grades[i] + rounding;
      if (result >= 40) grades[i] = result;
    }
  }
  return grades;
}


