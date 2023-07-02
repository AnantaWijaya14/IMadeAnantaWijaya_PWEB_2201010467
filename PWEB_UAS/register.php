<?php
include("cmd/user.php");
$psn = "";
//cek pengiriman form
if (isset($_POST["txPASS1"])) {
    if ($_POST["txPASS1"] == $_POST["txPASS2"]) {
        $nama = $_POST["txNAMA"];
        $email = $_POST["txEMAIL"];
        $user = $_POST["txUSER"];
        $pass = $_POST["txPASS1"];

        if (createuser($nama, $email, $user, $pass)) {
            $psn = "Create data user sukses";
        } else {
            $psn = "Create data user gagal";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-with-prefix.css">

</head>

<body>

    <div class="main-container">
        <div class="form-container">

            <div class="form-body mt-4">
                <h2 class="title">Form Registrasi</h2>

                <form action="register.php" method="post" class="the-form">

                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="txNAMA" id="nama" placeholder="Masukan Nama Anda">

                    <label for="email">Email</label>
                    <input type="text" name="txEMAIL" id="email" placeholder="Masukan Email Anda">

                    <label for="username">Username</label>
                    <input type="text" name="txUSER" id="username" placeholder="Masukan Username Anda">

                    <label for="password">Password</label>
                    <input type="password" name="txPASS1" id="password" placeholder="Masukan Password Anda">

                    <label for="password">Verifikasi</label>
                    <input type="password" name="txPASS2" id="password2" placeholder="Verifikasi Password Anda">

                    <input type="submit" value="Submit">

                </form>

            </div>
            <div class="form-footer">
                <div>
                    <span>Punya akun?</span> <a href="login.php">Masuk</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>