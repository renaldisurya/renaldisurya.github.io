<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 8 PEMROGRAMAN WEB</title>
</head>
<body>
    <?php
    #cara pertama mendeklarasikan array 1 dimensi
    print ("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
    $kota[0] = "Yogyakarta";
    $kota[1] = "Jakarta";
    $kota[2] = "Malang";
    print ("Kota pilihanmu: $kota[2]"); //Print adalah cara lain mencetak selain Echo

    echo "<br/><br/><br/>";

    #cara kedua mendeklarasikan array 1 dimensi
    print ("CARA KEDUA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
    $kota2 = array(0=>"Jember", 1=>"Bondowoso", 2=>"Surabaya");
    print ("Kota pilihanmu: $kota2[0]");

    echo "<br/><br/><br/>";

    #cara ketiga mendeklarasikan array dengan nilai index berupa teks, bukan angka
    print ("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
    $inisialkota = array("JBR"=>"Jember", "SDA"=>"Sidoarjo", "SBY"=>"Surabaya");
    echo "Inisial JBR adalah kota : ". $inisialkota["JBR"]."";
    ?>
</body>
</html>