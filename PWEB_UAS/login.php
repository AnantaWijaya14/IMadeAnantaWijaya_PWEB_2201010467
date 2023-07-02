<?php
session_start();
include("cmd/user.php");

if (isset($_POST["txUSER"])) {
    $user = $_POST["txUSER"];
    $pwd = $_POST["txPASS"];

    $islogin = ceklogin($user, $pwd);
    if ($islogin["STATUS"]) {
        $_SESSION["login"] = md5($user);
        $_SESSION["NAMA"] = $islogin["NAMA"];

        header("location: dashboard.php");
    } else {
        $_SESSION["login"] = " ";
        $_SESSION["NAMA"] = " ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-with-prefix.css">
</head>

<body>
    <div class="main-container">
        <div class="form-container">

            <div class="form-body">
                <h2 class="title">Form Login</h2>

                <form action="login.php" method="post" class="the-form">

                    <label for="username">Username</label>
                    <input type="text" name="txUSER" id="username" placeholder="Enter your username">

                    <label for="password">Password</label>
                    <input type="password" name="txPASS" id="password" placeholder="Enter your password">

                    <input type="submit" value="Log In">

                </form>

            </div>

            <div class="form-footer">
                <div>
                    <span>Belum Punya Akun?</span> <a href="register.php">Registrasi</a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>