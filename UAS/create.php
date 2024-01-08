<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $no=input($_POST["no"]);
        $alamat=input($_POST["alamat"]);
        $pesanan=input($_POST["pesanan"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into pesanan (nama,no,alamat,pesanan) values
		('$nama','$no','$alamat','$pesanan')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    
    <h2>Input</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Name :</label>
            <input type="text" name="nama" class="form-control" placeholder="Enter Name" required />

        </div>
        <div class="form-group">
            <label>Contact :</label>
            <input type="text" name="no" class="form-control" placeholder="Enter Contact" required/>
        </div>
        <div class="form-group">
            <label>Address :</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Enter Address" required></textarea>
        </div>
                </p>
        <div class="form-group">
            <label>Order :</label>
            <textarea name="pesanan" class="form-control" rows="5"placeholder="Enter Order" required></textarea>
        </div>       

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>