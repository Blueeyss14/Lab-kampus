<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Tampilkan</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST["name"] ?? ""));
        $tanggal = trim($_POST["tanggal_lahir"] ?? "");
        $hobby = $_POST["hobby"] ?? "";

        $tanggal_format = date("d F Y", strtotime($tanggal));
        $hobby_list = implode(", ", array_map('htmlspecialchars',$hobby));
    }

    ?> 
    <div>Name: <?= $name?></div>
    <div>Name: <?= $tanggal_format?></div>
    <div>Name: <?= $hobby_list?></div>
    <?php

    ?>
    
</body>
</html>