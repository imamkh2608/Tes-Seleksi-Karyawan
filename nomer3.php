<?php
//Soal A
echo "Soal A.";
echo "<br>";

$angka = array(20,10,100,30,15,5);
$angka1 = array(20,10,100,30,15,5);
$angka2 = array(20,10,100,30,15,5);
sort($angka1);
rsort($angka2);

echo "ascending : ";
print_r($angka1);//ascending
echo "<br>";
echo "descending : ";
print_r($angka2);//descending
echo "<br>";
$angka3 = array(180);
$tambah  = array_merge ($angka, $angka3);
echo "Soal B.";
echo "<br>";
print_r($tambah);
echo "<br>";

echo "Soal C.";
$hapus = array(20,10,100,30,15,5);
unset($hapus[3]);//menghapus
print_r($hapus);
?>
