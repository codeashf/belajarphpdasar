<?php 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Ahmed"); ?></h1>
</body>
</html>

<!-- STRING 
- strlen()
- strcmp()
- explode()
- htmlspecialchars() -->

<!-- Utility
- var_dump()
- isset()
- empty()
- die()
- sleep() -->