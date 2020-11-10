<?php
$tgl = ("2020-05-01");
$sub_month = substr($tgl, 5,2);
$sub_year = substr($tgl, 2,2);
$sub_day = substr($tgl, 8,2);
echo "Soal A." .$sub_month."-".$sub_year."-".$sub_day;
echo "<br>";

$tgl_date = date("m-y-d",strtotime($tgl));
echo "Soal B." .$tgl_date;
echo "<br>";


$tgl_skrg   = date("2020-05-01");
$enam_bulan = mktime(0,0,0,date("n")+6,date("j"),date("Y"));
$tgl_hasil  = date("Y-d-m",$enam_bulan);
echo "Soal C.";
echo "<br />";
echo "Tgl Sekarang : $tgl_skrg ";
echo "<br />";
echo "Tgl enam Bulan Kedepan : $tgl_hasil";


echo "<br />";
// Tanggal Lahir
$tgl_lahir = "1994-08-30";
	
// ubah ke format Ke Date Time
$lahir = new DateTime($tgl_lahir);
$hari_ini = new DateTime("2020-05-01");
	
$diff = $hari_ini->diff($lahir);
	
// Display
echo "Tanggal Lahir: ". date('d-m-Y', strtotime($tgl_lahir)) .'<br />';
echo "Soal D. Umur Saya: ". $diff->y ." Tahun";
echo " ". $diff->m ." Bulan";
echo " ". $diff->d ." Hari"

?>
