<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT</title>
</head>
<body>
    <h2>Data Diri</h2>
    <form method="POST">
        <fieldset>
        <legend>Form Input</legend>
        <p>
            <label>Nama :</label>
            <input type="text" name="nama" placeholder="Masukan Nama Anda" />
        </p>
        <p>
            <label>Tanggal Lahir :</label>
            <input type="date" name="tgl_lahir" />
        </p>
        <p>
            <label>Pekerjaan :</label>
            <select name="pekerjaan">
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Pegawai Negeri">Pegawai Negeri</option>
                <option value="Dan Lainnya">Dan Lainnya</option>
            </select>
        </p>
        <p>
            <label>Gaji :</label>
            <select name="gaji">
                <option value="1.000.000 s/d 3.000.000">1.000.000 s/d 3.000.000</option>
                <option value="3.000.000 s/d 6.000.000">3.000.000 s/d 6.000.000</option>
                <option value="6.000.000 s/d 9.000.000">6.000.000 s/d 9.000.000</option>
                <option value="Dan Lainnya">Dan Lainnya</option>
            </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Kirim" />
        </p>
        </fieldset>
    </form>

    <fieldset>
    <legend>Report</legend>
    <?php
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];
    $gaji = $_POST['gaji'];

    $tanggal_lahir = new DateTime($_POST['tgl_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $umur = "0";
    }
    $umur = $sekarang->diff($tanggal_lahir)->y;
    
    echo "Nama = $nama <br>";
    echo "Umur = $umur tahun <br>";
    echo "Pekerjaan = $pekerjaan <br>";
    echo "Gaji = $gaji <br>";
    ?>
    </fieldset>
</body>
</html>
