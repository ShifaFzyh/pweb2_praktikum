<?php 
$temanSaya = ["Shin", "Chan", "Kudo", "Kaito"];
print_r ($temanSaya); //print_r digunakan untuk menampilkan array
echo $temanSaya[2]; //mengakses elemen array

echo count ($temanSaya); //menghitung jumlah elemen dalam array

echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key . $value</li>";
}
echo "</ol>";
$temanSaya[2] = "Minho";
unset ($temanSaya[0]);
print_r ($temanSaya);

echo "<br><br><br>";
$buah = ["a" => "Apel", "Alpukat", "Mangga"];
print_r ($buah);


//Uji coba mandiri fungsi array
echo "<br><br><br>";
$ar_buah = ["A" => "Alpukat", "B" => "Belimbing", "C" => "Cerry"];
echo "<ol>";
foreach ($ar_buah as $key => $value) {
    echo "<li> $key . $value </li>";
}
echo "<br>";

// sort () = mengurutkan array/nilai secara ascending
sort ($ar_buah); 
foreach ($ar_buah as $key => $value) {
    echo "<li> $key . $value </li>";
}
echo "<br>";

// array_pop () = menghapus elemen terakhir
array_pop ($ar_buah); 
foreach ($ar_buah as $key => $value) {
    echo "<li> $key . $value </li>";
}
echo "<br>";

// array_push () = menambah elemen di akhir array
array_push ($ar_buah, "Duku"); 
foreach ($ar_buah as $key => $value) {
    echo "<li> $key . $value </li>";
}
echo "<br>";

// array_shift () = menghapus elemen pertama
array_shift ($ar_buah); 
foreach ($ar_buah as $key => $value) {
    echo "<li> $key . $value </li>";
}
echo "<br>";

// array_unshift () = menambah elemen di awal array
array_unshift ($ar_buah, "Apel", "Mangga");
foreach ($ar_buah as $key => $value) {
    echo "<li> $key . $value </li>";
}

echo "</ol>";
?>
