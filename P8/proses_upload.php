<?php
$targetDirectory = "images/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']) && $_FILES['files']['name'][0] != "") {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]); 
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedTypes = array("jpg", "png", "jpeg", "gif");

        if (in_array($fileType, $allowedTypes)) {

            if ($_FILES['files']['size'][$i] > 5000000) {
                echo "File $fileName gagal diunggah. Ukuran file terlalu besar (maks 5MB).<br>";
                continue;
            }

            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File **$fileName** berhasil diunggah dan tersimpan.<br>";
            } else {
                echo "Gagal mengunggah file **$fileName** (terjadi kesalahan sistem).<br>";
            }

        } else {
            echo "File **$fileName** gagal diunggah. Hanya file JPG, JPEG, PNG & GIF yang diizinkan.<br>";
        }

    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>