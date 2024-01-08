<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas String dan Tanggal</title>
</head>
<body>
    <form>
        Masukkan Nama, Email, dan Password <br>
        Default Nama = belajar, Email = test@gmail.com dan Password = madiun
    <br>
        Isian Data : <br>
        Nama : <input type="text" name="password"><br>
        Email : <input type="text" name="email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="cek"><br>
    </form>
    
    <?php
        if(isset($email))
            if(empty($email))
                print("Harap Mengisi Email <br>\n");
        else
            {
                //if (ereg("^.+@.+\\..+$", $email))
                if(ereg("test@gmail.com", $email))
                    print("Alamat email $email valid <br>\n");
                else
                    print("Alamat email $email tidak valid <br>\n");
            }

    if(isset($password))
            {
                $nama = "belajar";
                $pass_valid = crypt("madiun", $nama);
                $enkripsi = crypt("password", $nama);

                if($pass_valid == $enkripsi)
                    print("Password Valid");
                else
                    print("Password Salah");
            }
    ?>
</body>
</html>