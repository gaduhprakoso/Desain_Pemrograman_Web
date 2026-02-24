<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "operasi pada angka " . $a . " dan " . $b . "<br><br>";
echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKali} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Sisa bagi: {$sisaBagi} <br>";
echo "pangkat {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil sama: {$hasilSama} <br>";
echo "Hasil tidak sama: {$hasilTidakSama} <br>";
echo "Hasil lebih kecil: {$hasilLebihKecil} <br>";
echo "Hasil lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama: {$hasilLebihKecilSama} <br>";
echo "Hasil lebih Besar sama: {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil AND: {$hasilAnd} <br>";
echo "Hasil OR: {$hasilOr} <br>";
echo "Hasil Not A: {$hasilNotA} <br>";
echo "Hasil Not B: {$hasilNotB} <br>";

echo "<br>";
$a += $b;
echo "Hasil a += b : {$a} <br>";
$a -= $b;
echo "Hasil a -= b : {$a} <br>";
$a *= $b;
echo "Hasil a *= b : {$a} <br>";
$a /= $b;
echo "Hasil a /= b : {$a} <br>";
$a %= $b;
echo "Hasil a %= b : {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";

#Tugas Praktikum 3 soal no 3.6
echo "<br>";
echo "Soal Cerita! <br>Sebuah restoran memiliki 45 kursi di dalamnya. 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. <br>
Berapa persen kursi yang masih kosong di restoran tersebut?";

$kursi = 45;
$kursiTerisi = 28;
$kursiKosong = $kursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $kursi) * 100;

echo "Jumlah kursi di restoran: {$kursi} <br>";
echo "Jumlah kursi terisi: {$kursiTerisi} <br>";
echo "Jumlah kursi kosong: {$kursiKosong} <br>";
echo "Persentase kursi kosong: " . $persenKosong . "% <br>";

?>