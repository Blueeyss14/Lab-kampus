<?php
$nama = $_POST['nama'] ?? '';
echo "Halo " . htmlspecialchars($nama);
