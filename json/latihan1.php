<?php

$mahasiswa = [
    [
        "nama" => "Rio Fachrudin",
        "nrp" => "181132123212",
        "email" => "riofchrdn@gmail.com"
    ],
    [
        "nama" => "Aida Nur Fitriana",
        "nrp" => "191132837372",
        "email" => "aidanurfitriana@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
