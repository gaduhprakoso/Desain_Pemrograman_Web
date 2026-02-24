<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="styleArray_2.css">
</head>

<body>
    
    <div class="data-card"> 
        <h2 class="card-title">Kartu Identitas Dosen</h2>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "Nama :{$Dosen['nama']}<br>";
        echo "Domisili : {$Dosen['domisili']}<br>";
        echo "Jenis Kelamin : {$Dosen['jenis_kelamin']}<br>";
        ?>
    </div>
    </body>

</html>