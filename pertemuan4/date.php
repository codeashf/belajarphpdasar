<?php 
    // Date
    // Untuk menampilkan tangga dengan format tertentu
    // echo date("l, d-M-Y");


// Time
// UNIX timestamp / EPOCH 
// detik yang sudah berlu sejak 1 Januari 1980
// echo time()
// echo date("l", time()+60*60*24*100);


// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date ("l", mktime(0,0,0,8,1985));

// strtotime 
echo date ("l", strotime ("25 aug 1985")
?>