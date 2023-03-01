<?php
$arrayBuah = ["Jeruk","Manggis","Apel","Durian"];

//mengurutkan array
sort($arrayBuah);

//Menghapus Data Terakhir
array_pop($arrayBuah);

//Menghapus variabel ataupun spesifik value array
unset($arrayBuah[0]);

//Menambahkan data/value array dipaling akhir
array_push($arrayBuah,"Buah Mangga");

//Menghapus data/value data yang pertama
array_shift($arrayBuah);

//Menambahkan data/value array paling awal
array_unshift($arrayBuah, "Semangka");

//Mengubah data/value array dengan spesifike atau index
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}