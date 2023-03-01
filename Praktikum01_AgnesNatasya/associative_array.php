<?php
$profilArray = [
    "nama" => "Agnes",
    "semester" => 2
];

echo $profilArray['nama'] . "<br>";
echo $profilArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "Vanher",
        "semester" => 2
    ], [
        "nama" => "Natasya",
        "semester" => 3
    ]
];
    foreach($profileMultiArray as $profile) {
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>";
    }