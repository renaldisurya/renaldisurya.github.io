<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 7 PEMROGRAMAN Web</title>
</head>
<body>
    <form method="get">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"/></td>
            </tr>
            <tr align="center">
                <td cosplan="3"><input type="submit" name="submit" value="simpan"/>&nbsp;
                <input type="Reset" name="Reset" value="Reset"/></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['submit'])) { //Pengecekan jika diproses tombol submit, maka berniai true
            $nama = $_GET['nama']; //Variabel untuk mengambil nilai dari URL nama
            $nim = $_GET['nim']; //Variabel untuk mengambil nilai dari URL nim

            echo "<br/><br/> INI OUTPUT SESUAI INPUTAN DARI FORM DI ATAS <br/>";
            echo "Nama : ". $nama;
            echo "NIM : ". $nim;
        }
    ?>
</body>
</html>