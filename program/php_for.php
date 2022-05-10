<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LOOPING FOR</title>
</head>
<body>
    <h2>Belajar PHP Perulangan For</h2>
    <?php
    echo "Perulangan 1 sampai 5 <br />";
    for ($i=1; $i<=5; $i++) {
        echo "Perulangan ke:" . $i . '<br />';
    }
    echo "Perulangan Menurun dari 5 ke 1 <br />";
    for ($i=5; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
</body>
</html>