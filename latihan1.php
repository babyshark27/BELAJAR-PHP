<?php

//variable
$nama = 'Taufik';
$totalBelanja = 150000;
$keterangan = '';

// if-else
if ($totalBelanja > 100000) {
    $keterangan = "Selamat $nama anda mendapatkan";
} else {
    $keterangan = "Terima kasih $nama, sudah berbelanja";
}

echo "Nama Pelanggan : $nama";
echo "<br/>Total Belanja : Rp. $totalBelanja";


?>