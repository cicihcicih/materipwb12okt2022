<?php
//membuat funcition untuk mencetak br(break)
function printBr() {
    echo "<br>";

}

printBr();

echo "<strong>Ini Materi function...!!</strong>";
printBr();
//functioon untuk break
function buat_nama_kapital($nama) {
    return ucwords($nama);

}

$nama_legkap = buat_nama_kapital("cicih");
echo $nama_legkap;
printBr();

//memanggil function dalam function lain
function perkenalkan($nama, $asal) {
    echo "perkenalakan nama saya " . buat_nama_kapital($nama) . ", asal saya dari " .$asal;

}

perkenalkan("Cicih", "Karawang");
printBr();
perkenalkan("bobi", "arabian");
printBr();

function dataDiri($akusi){
    echo "Halo nama saya $akusi, saya siswi neskar ";
}
dataDiri("cicih");
printBr();
dataDiri("bobi");


printBr();
printBr();

echo "<strong>Ini Materi looping...!!</strong>";
printBr();

for($i = 1; $i < 5 ; $i++ ){
    echo "ini adalah looping ke $i <br>";
  }
  //contoh while
printBr();
$x = 0;

while($x < 5) {
  echo "$x - ini adalah looping dengan while ke";
  printBr();
  $x++;
} 

printBr();
// dengan do while
$x = 0;
do {
  echo "$x - ini adalah looping dengan do while ";
  printBr();
  $x++;
} while ($x < 5);
printBr();

//foreach
//sintaks penulisannya adalah, 
//foreach ($array as $value){
// blok kode yang di ulang
//}

$array = ["satu", "dua", "tiga", "empat", "lima"];
foreach ($array as $value) {
  echo "$value - ini adalah looping dengan foreach";
  printBr();
}
printBr();

echo "<strong> Ini Materi Percabangan...!!</strong>";
printBr();

// contoh suntaks if
// if (<kondisi benar>){
  //blok kode ini akan di eksekusi ika kondisi benar
  // }else{
    //blok kode ini akan dieksekusi jika kondisi salah
//  }

if (5 > 3){
  echo "5 lebih besar dari 3";
  printBr();
}else{
  echo "5 tidak lebih besar dari 3";
  printBr();
}

// ternary operator
//sintaks penulis nya adalah
//(kondisi)?(Statement1):(statemen2);
$materi="PHP";
echo ($materi == "PHP")?"Hari ini belajar PHP": "Hari ini bukan materi PHP";

?>
