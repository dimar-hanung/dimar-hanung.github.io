


// Amara dan Bintang Mengerjakan sebuah kuis, kamu diminta untuk menghitung perbandingan hasil kuis mereka

// Ketentuan:
// A adalah Amara, B adalah Bintang
// a[i] > b[i] , Amara mendapat 1 point,
// a[i] < b[i] , Bintang Mendapat 1 point,
// a[i] == b[i] , Ga ada yang dapet point

// Contoh :
// a = [1,2,3]
// b = [3,2,1]

// Output :
// [1,1] 

// penjelasan :
// a[0] < b[0]  = Bintang dapat 1 point
// a[1] == b[1] = ga ada yang dapet point
// a[2] > b[2]  = Amara Dapet point satu
// jadi hasil score mereka adalah [1,1], index 0 adalah score Amara, dan index 1 adalah score Bintang


console.log(compareTriplets([1,2,3],[3,2,1]));

function compareTriplets(a, b){

    let count = [0,0];

    if(a.length == b.length){

        for(let i = 0; i < a.length; i++){

           a[i]==b[i]?'':a[i]>b[i]?count[0]++ : count[1]++ ;

        }

    }
    
    return count

}