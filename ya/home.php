<?php
$nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : 'User';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body style="font-family: 'Segoe UI'; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f5f5f5;">
  <h1>Hello, <?php echo $nama; ?>!</h1>
</body>
</html>
