

//input : saveChangesInTheEditor
//output : 5

//kenapa?
//String  contains five words:

// save
// Changes
// In
// The
// Editor

// hitung huruf besar??? yup
//teu ngarti:(, :(

camelCaseCount('saveChangesInTheEditor');

function camelCaseCount(s){
    
    s = s.split('');
    let output = 1;
    for(let i = 0;i<s.length;i++){

        if(s[i] == s[i].toUpperCase()){
            output++;
        }

    }
    console.log(output);

}





//experiment pakek regex bisa gak sih di node, js bisa sih. filter aja huruf besarnya pakek regex
// replace semua huruf non besar sama kosong terus . length,
// tau cara pakek negasi?? kok nggak bisa, lg searching
// smart wkwk, mau coba tanpa regex dulu
let str = 'saveChangesInTheEditor';
var spacedCamel = str.replace(/([^A-Z])/g, "");
console.log(spacedCamel.length + 1)// tadi kebalik tulisannya length, iya wkwk, aku malah ikut ikutan :v
// kenapa ane gk bisa pakek console ya, itu bisa kan?
// Maksudnya tadi hasilnya undefined? sekarang ane nggak bisa pakek console

// console yg aku share, console apa terminal? powershel shared
//ga bisa enter? gk bisa ketik malah

//bentar aku reset aja

//udah betul, tinggal +1 aja kenapa bisa +1 itu kalimat berarti bukan case
//soalnya kaya gitu, huruf paling depan walau gk camelCase suruh dihitug, ooh
//btw ^ artinya apa? negasi. jadi replace selain huruf A-Z denganv "" [empty]
// o iya paham, jauh lebih efisien pake regrex ya, dari segi komputasinya juga jauh lebih efisien
// biasaqnya yg pakek regex dikelas cuma sini sih. temen ane milih kayak atas . ngakak ane
// males mikirnya sih wkkw, yg susah itu buat jadi efisien nya, kalo asal ngoding gampang
// tapi-kan enak jadi 3 line, nah iya makanya, 
// cuma buat 3 line kadang mikirnya lebih susah dari yang 10 line
//apa lahi nih
