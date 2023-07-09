<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

//Standar Output
//echo, print
//print_r
//var_dump

// echo "Ahmad Shofi";

// Penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML di dalam PHP

//Variabel dan Tipe dat
// Variabel
// $nama = "Sandika";

//Operator
// aritmatika
// + - * / %
// $x = 10;
// echo $x * $y;

// penggabung string / concatenation / concat
// .

// $nama_depan = "Ahmed";
// $nama_bealakang = "Shofi";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x += 5;
// echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5);

// Identitas
// ===, !==
// var_dump(1 === "1")

// logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);
// var_dump($x > 20 || $x % 2 == 0);





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Selamat Datang <?php echo $nama; ?></h1>
</body>
</html>