<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SWITCH</title>
</head>
<body>
    <h2>Belajar PHP Kondisi Switch</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default :
            echo "Rabu";
    }  
    ?>
</body>
</html>