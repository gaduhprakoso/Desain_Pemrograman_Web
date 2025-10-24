<!DOCTYPE html>
<html>
<head>
<title>Form Input PHP</title>
</head>
<body>
<h2>Form Input PHP</h2>
<?php

$namaError = "";
$nama = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["nama"])) {
        $namaError = "Nama harus diisi!";
    } else {
        $nama = $_POST["nama"];
        echo "Data berhasil disimpan!";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
    <span class="error"><?php echo $namaError; ?></span><br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>