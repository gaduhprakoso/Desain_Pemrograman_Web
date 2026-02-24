<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
} 

echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari 
hari untuk mencapai jarak 500 kilometer.";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

for ($i = 0; $i < count($nilaiSiswa); $i++) {
    for ($j = $i + 1; $j < count($nilaiSiswa); $j++) {
        if ($nilaiSiswa[$i] > $nilaiSiswa[$j]) {
            
            $temp = $nilaiSiswa[$i];
            $nilaiSiswa[$i] = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $temp;
        }
    }
}

$totalNilai = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

echo "Total nilai rata rata: $totalNilai";

echo "<br><br>";

$hargaProduk = 120000;
$diskon = 20;

if ($hargaProduk > 100000) {
    $jumlahDiskon = ($diskon / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
    
    echo "Harga produk setelah diskon : Rp.{$hargaSetelahDiskon}";
} else {
    echo "Produk tidak memenuhi syarat untuk mendapatkan diskon.";
}

echo "<br><br>";

$totalPoin = 550;

echo "Total skor pemain adalah: $totalPoin<br>";

$hadiah = ($totalPoin > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
