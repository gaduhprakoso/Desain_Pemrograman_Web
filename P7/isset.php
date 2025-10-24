<?php

$umur;
if (isset($umur) && $umur >= 18) {
echo "Anda sudah dewasa.";
} else {
echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) { // Kunci "nama" ada dan diset nilainya.
    echo "Nama: " . $data["nama"];
} else {
    // ...
}