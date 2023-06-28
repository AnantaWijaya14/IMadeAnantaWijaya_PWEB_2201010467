<?php
    $judulpage ="Latihan script PHP";
    $konten = "<h3> Latihan script PHp</h3>";
    $konten .= "<p>latihan script PHP: <ul><li>penulisan script PHP bersifat case sensitive </li><li>Setiap akhir baris ditandai denga titik koma </li></p>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage; ?></title>
</head>
<body>
<?php
    echo $konten;
?>
</body>
</html>