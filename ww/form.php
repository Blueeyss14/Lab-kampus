<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h2>Formulir Data Diri</h2>
        <form action="proses.php" method="POST">
            <label>Nama:</label><br>
            <input type="text" name="name" required><br>

            <label>Tanggal Lahir:</label><br>
            <input type="date" name="tanggal_lahir"><br>

            <label>Hobby:</label><br>
            <input type="checkbox" name="hobby[]" value="membaca">Membaca<br>
            <input type="checkbox" name="hobby[]" value="menulis">Menulis<br>
            <input type="checkbox" name="hobby[]" value="menonton">Menonton<br>
            <input type="checkbox" name="hobby[]" value="lainnya">Lainnya<br>

            <input type="submit" value="kirim"><br>
        </form>
    </div>
</body>
</html>