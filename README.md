# Web7Lab7

**Nama    : Aning Kinanti** <br>
**NIM     : 312010364** <br>
**Kelas   : TI.20.A2** <br>
**Matkul  : Pemrograman Web** <br>

# Belajar PHP
    1. Pastikan Xampp sudah terinstall dan server dapat berjalan dengan baik http://127.0.0.1 atau http://localhost
    2. Tempatkan file website tempatkan di direktori: \xampp\htdocs\

## A. Pengenalan PHP
### 1. PHP DASAR
Buatlah dokumen PHP dengan nama php_dasar.php seperti contoh dibawah ini : <br>
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DASAR</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello Sunshine !";
    ?>

    <h2>Menggunakan Variabel</h2>
    <?php
        $nim = "312010364";
        $nama = "Aning Kinanti";
        echo "NIM   : ". $nim . "<br>";
        echo "Nama  : $nama"; 
    ?>
</body>
</html>
```
<br>

Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar <br>
php_dasar.phpIni adalah hasil dari sintaks diatas :
![Gambar 1](screenshot/ss1.PNG) <br>