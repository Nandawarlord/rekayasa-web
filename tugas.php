<?php
// Membuat variabel array
$arrayData = [
    "nama" => "Ananda",
    "usia" => 20,
    "pekerjaan" => "Mahasiswa",
    "hobi" => ["Membaca Komik", "Sepak bola", "Valorant"]
];

// Encode array ke format JSON
$jsonData = json_encode($arrayData);
echo "Data dalam format JSON: " . $jsonData . "<br>";

// Decode JSON kembali ke array
$decodeData = json_decode($jsonData, true);

// Tampilkan data setelah decode
echo "Nama: " . $decodeData['nama'] . "<br>";
echo "Usia: " . $decodeData['usia'] . "<br>";
echo "Pekerjaan: " . $decodeData['pekerjaan'] . "<br>";
echo "Hobi: " . implode(", ", $decodeData['hobi']) . "<br>";
?>
