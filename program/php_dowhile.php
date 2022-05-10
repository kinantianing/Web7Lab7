<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LOOPING DOWHILE</title>
</head>
<body>
    <h2>Belajar PHP Perulangan DoWhile</h2>
    <?php
    echo "Perulangan 1 sampai 5 <br />";
    $i=1;
    do {
        echo "perulangan ke : " . $i . '<br />';
        $i++;
    } while ($i<=5);
    ?>
</body>
</html>