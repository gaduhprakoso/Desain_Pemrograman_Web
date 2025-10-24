<?php
header('Content-Type: application/json');

$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? ''; 

$errors = [];


if (empty($nama)) {
    $errors[] = "Nama harus diisi.";
}

if (empty($email)) {
    $errors[] = "Email harus diisi.";
}

if (strlen($password) < 8) {
    $errors[] = "Password minimal harus 8 karakter.";
}


if (!empty($errors)) {
    http_response_code(400); 
    echo json_encode([
        'success' => false,
        'message' => 'Validasi Gagal.',
        'errors' => $errors
    ]);
} else {
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Validasi Berhasil! Data telah diproses.'
    ]);
}

exit; 
?>