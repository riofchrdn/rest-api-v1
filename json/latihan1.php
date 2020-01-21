<?php

// $mahasiswa = [
//     [
//         "nama" => "Rio Fachrudin",
//         "nrp" => "181132123212",
//         "email" => "riofchrdn@gmail.com"
//     ],
//     [
//         "nama" => "Aida Nur Fitriana",
//         "nrp" => "191132837372",
//         "email" => "aidanurfitriana@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');

$db = $dbh->prepare('SELECT * FROM mahasiswa');

$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
