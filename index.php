<!DOCTYPE html>
<html>
<head>
    <title>Prvi php</title>
    <meta charset="utf-8"
</head>

<body>
<h1>Prvi PHP</h1>

<?php
    echo('Ovo je prije odlomka<br>');
    echo('Super, jos cemo dodati<br>');

    echo(date('d.m.Y'));
    echo('<br>');

    $ocjena = 5;
    echo('<br>Vaša ocjena je: ' . $ocjena);
    $nova_var = 166.8;
    echo('<br>' . $nova_var);
?>
<p>
    Ovo je odlomak
</p>
</body>
</html>