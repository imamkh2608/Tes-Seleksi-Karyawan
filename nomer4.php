<?php

$kalimat = "AKU SUKA MAKAN NASI PADANG";

echo $kalimat;
echo "<br><br>";
$kalimat2 = ["aku", "aku suka", "aku suka makan","aku suka makan nasi","aku suka makan nasi padang","padang",
            "padang nasi","padang nasi makan","padang nasi makan suka","padang nasi makan suka aku"];

echo "Soal A.";
echo "<br>";
// menampilkan isi array dengan perulangan 
for($i=0; $i < count($kalimat2); $i++){
    echo $kalimat2[$i]."<br>";
}

// menampilkan isi array
echo "<br><br>";
echo "Soal B.";
echo "<br>";
echo $kalimat2[0]."<br>";
echo $kalimat2[1]."<br>";
echo $kalimat2[2]."<br>";
echo $kalimat2[3]."<br>";
echo $kalimat2[4]."<br>";
echo $kalimat2[5]."<br>";
echo $kalimat2[6]."<br>";
echo $kalimat2[7]."<br>";
echo $kalimat2[8]."<br>";
echo $kalimat2[9]."<br>";



?>