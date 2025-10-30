<?php
$valid_username = "admin";
$valid_password = "password123";

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

if ($username === $valid_username && $password === $valid_password) {
    header("Location: home.php?nama=" . urlencode($nama));
    exit;
} else {
    header("Location: login.html?error=1");
    exit;
}
?>
