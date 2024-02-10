<?php

// $mahasiswa = [

//   [
//     "nama"  => "azhar",
//     "NRP"   => "223040077",
//     "kelas" => "B",
//   ],

//   [
//     "nama"  => "azhar",
//     "NRP"   => "223040077",
//     "kelas" => "B",
//   ]
// ];



$dbh = new PDO('mysql:host=localhost;dbname=pw2023_223040077', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$mahasiswa = json_encode(($mahasiswa));
echo $mahasiswa;
