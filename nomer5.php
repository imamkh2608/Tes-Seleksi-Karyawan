<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>
<body>
    <?php

    $buah = array(
        array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
        array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
        array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
        array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
        array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
        array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
        );
    //soal no.1   
    $buah[]= array( "NAMA" => "PISANG", "HARGA" => 5000, "RASA" => "MANIS");
    rsort($buah);
    echo "<pre>";
    print_r($buah);
    //end soal No.5A

    //soal No.5B
    foreach($buah as $row){
        // var_dump(array_search('K', $buah));
   
            if (strpos($row['NAMA'], 'K') !== false) {

                    echo "<pre>";
                     print_r($row);
                     echo "</pre>";
            } 
            
       
    }
    //End Soal No.5B

    //Soal No.5C
    # nilai yang kurang dari 10000 
    // foreach($buah as $result){  
    
        $sepuluhribu = array_filter($buah, function ($item) {
            return $item['HARGA'] < 10000 and $item['RASA'] == 'MANIS';
        });
        print_r($sepuluhribu);
        
    // }
    //End Soal No.5C


    ?>
</body>
</html>