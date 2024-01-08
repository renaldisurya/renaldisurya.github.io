<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 6 PEMROGRAMAN WEB</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="mk">
                        <option value="">---- Pilih Mata Kuliah ----</option>
                        <option value="Pemrograman Terstruktur">Pemrograman Terstruktur</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Object</option>
                        <option value="Algoritma & Struktur Data">Algoritma & Struktur Data</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki"/>Laki-laki<br/>
                    <input type="radio" name="jk" value="Perempuan"/>Perempuan
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"/></td>
            </tr>
            <tr align="center">
                <td colpspan="3"><input type="submit" name="submit" value="submit" value="Simpan"/>&nbsp;
                <input type="reset" name="Reset" value="Reset"/></td>
            </tr>
        </table>
    </form>
    
    <?php
        if(isset($_POST['submit'])){ //Pengecekan jika diproses tombol submit, maka bernilai true
            $nama = $_POST['nama']; //Variabel untuk mengambil nilai fari textfield nama
            $mk = $_POST['mk']; //Variabel untuk mengambil nilai dari combobox mata kuliah
            $jk = $_POST['jk']; //Variabel untuk mengambil nilai dari radio button jenis kelamin
            $email = $_POST['email']; //Variabel untuk mengambil nilai dari text email 

            echo "INI OUTPUT SESUAI INPUTAN DARI FORM DI ATAS <br/>";
            echo "Nama : ". $nama;
            echo "<br/>Mata Kuliah : ". $mk;
            echo "<br/>Jenis Kelamin :". $jk;
            echo "<br/>Email : ". $email;
        }
    ?>
</body>
</html>