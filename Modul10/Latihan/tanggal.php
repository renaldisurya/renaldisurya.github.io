<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Tanggal</title>
</head>
<body>
    <?php
    $namahari
    array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
    $namabulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", 
                "September", "Oktober", "November", "Desember");

    echo $namahari[date("w")].",    ".date("j")."  ". $namabulan[date("n")]."  ".date("Y");

    echo date("Y/m/d")  .   "<br />"; //Ini menampilkan dengan format 2017/10/02
    echo date("l, d-m-Y")   .   "<br /"; //Ini menampilkan dengan format Tuesday, 02-01-2017

    echo date("d F Y")  .   "<br />"; //Ini menampilkan dengan format 02 Oktober 2017

    echo date("h:i:s")  .   "<br />"; //Ini menampilkan format 00:31:04
    echo date("l, d-m-Y h:i:s") .   "<br />"; //Inimenampilkan dengan format Tuesday, 02-10-2017 00:31:35
    ?>
    
</body>
</html>