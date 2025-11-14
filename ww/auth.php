<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $validAdmin = "admin";
            $validPassword = "password123";

            $admin = htmlspecialchars(trim($_POST["username"] ?? ""));
            $password = htmlspecialchars(trim($_POST["password"] ?? ""));

            if ($admin === $validAdmin && $password === $validPassword) {
                ?> 
                <h1>Halo <?= $admin?> </h1>
                <?php
            } else {
                 ?> 
                <h1>Password salah</h1>
                <?php
            }
        }
    ?>
</body>
</html>