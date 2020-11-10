<?php

//Perulangan menggunakan For
echo "Perulangan For : ";
for ($i= 1; $i <= 15; $i++)
{
   echo $i++ . "&nbsp";
//    echo "<br />";
}


//Perulangan menggunakan While
echo "<br>";
echo "Perulangan While : ";
$a=1;
while ($a <= 15)
{
  echo "$a" . "&nbsp";
  // echo "<br />";
  $a=$a+2;
}



?>