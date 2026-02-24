<!DOCTYPE html>
<html>
<head>
    <title>Uji Keamanan Input (Soal 4.1)</title>
</head>
<body>

    <h3>Uji Sanitasi HTML: htmlspecialchars()</h3>

    <form method="POST">
        <label for="input_teks">Masukkan Teks (Coba masukkan kode HTML, contoh: <b>Halo</b>):</label><br>
        <input type="text" id="input_teks" name="input" required>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
        
        $input = $_POST['input'];
        $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        echo "<hr>";
        echo "<h4>Hasil Output:</h4>";
        echo "<p>Input Asli: " . $input . "</p>";
        echo "<p>Input **Setelah Diamankan (Langkah 2)**: " . $input_aman . "</p>";
        
        echo "<p>Anda akan melihat bahwa tag HTML di input asli diubah menjadi entitas HTML (`&lt;b&gt;` menjadi `<b>`) pada input yang diamankan.</p>";
    }
    ?>

</body>
</html>

<hr>

<h3>Uji Validasi Email: filter_var() (Soal 4.2)</h3>

<form method="POST">
    <label for="email_input">Masukkan Alamat Email:</label><br>
    <input type="text" id="email_input" name="email" required>
    <button type="submit" name="submit_email">Validasi</button>
</form>

<?php
if (isset($_POST['submit_email']) && isset($_POST['email'])) {
    
    $email = $_POST['email'];
    
    echo "<hr>";
    echo "<h4>Hasil Validasi:</h4>";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: green;'>Email: **" . $email . "** **VALID**</p>";
        echo "<p>Kode berhasil masuk ke blok `if`.</p>";
    } else {
        echo "<p style='color: red;'>Email: **" . $email . "** **TIDAK VALID**</p>";
        echo "<p>Kode masuk ke blok `else` (penanganan input tidak valid).</p>";
    }
}
?>