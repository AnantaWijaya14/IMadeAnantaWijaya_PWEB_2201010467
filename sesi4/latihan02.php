<?php
    $usr ="";
    $ps ="";
    $erusr ="";
    $erps ="";
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["exPASKY"];

        if($usr==""){
        $erusr ="<div style='color:red;font-size: 10px;'>Field User masih kosong</div>";
    }
        if($ps==""){
        $erps ="<div style='color:red;font-size: 10px;'>Field password masih kosong</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form method POST</title>
</head>
<body>
    <form method="POST" action="latihan02.php">
        <div>
            User name
            <input type="text" name="txUSER">
            <?=$erusr;?>
        </div>
        <div>
            Password
            <input type="password" name="exPASKY">
            <?=$erps;?>
        </div>
        <div>
            <button>Login</button>
        </div>

    </form>

    <div>
        Isi dari form :<br>
            1. User Nama : <?=$usr?><br>
            2. Password:<?=$ps?>
    </div>
</body>
</html>