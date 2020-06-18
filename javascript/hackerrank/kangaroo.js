

// x = titik awal
// v = jumlah loncatan angka

console.log(kangaroo(0,2,5,3));

function kangaroo(x1, v1, x2, v2) {

    let limit =0;

    while(x1 !== x2){
        limit++;
        if(limit>=10000){
            
            return "NO"
        }
        x1+=v1;
        x2+=v2;
        if(x1==x2) return "YES"
    }



}