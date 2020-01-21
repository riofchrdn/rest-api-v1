<?php

$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rest API</title>
</head>

<body>
    <h2 align="center">BIODATA MAHASISWA</h2><br />
    <p>Nama : <?= $mahasiswa[1]["nama"]; ?></p>
    <p>Umur : <?= $mahasiswa[1]["umur"]; ?></p>
    <p>Nrp : <?= $mahasiswa[1]["nrp"]; ?></p>
    <p>Hobby : <?= $mahasiswa[1]["hobby"]; ?></p>
    <p>Pembimbing : <?= $mahasiswa[1]["pembimbing"]["pembimbing1"]; ?></p><br />
    <p>Nama : <?= $mahasiswa[0]["nama"]; ?></p>
    <p>Umur : <?= $mahasiswa[0]["umur"]; ?></p>
    <p>Nrp : <?= $mahasiswa[0]["nrp"]; ?></p>
    <p>Hobby : <?= $mahasiswa[0]["hobby"]; ?></p>
    <p>Pembimbing : <?= $mahasiswa[0]["pembimbing"]["pembimbing2"]; ?></p>
</body>

</html>