<?php
session_start();

if (isset($_SESSION["login"])) {
    if (!$_SESSION["login"] == "") {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dashboard</title>
            <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/css/dashboard.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>

        <body>
            <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="dashboard.php">Ananta Wijaya</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="login.php">Sign out</a>
                    </div>
                </div>
            </header>

            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                        <div class="position-sticky pt-3 sidebar-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="dashboard.php">
                                        <span data-feather="home" class="align-text-bottom"></span>
                                        Dashboard
                                    </a>
                                </li>
                                <div class="dropdown">
                                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Mobile Legend
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="team/team.php">Teams</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </nav>

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h2 class="h2">
                                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_OLzqniWinA.json" background="transparent" speed="1" style="width: 700px; height: 200px;" loop autoplay></lottie-player>
                            </h2>
                            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_vxumuqkl.json" background="transparent" speed="1" style="width: 300px; height: 200px;" loop autoplay></lottie-player>
                        </div>
                        <div>
                            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_puciaact.json" background="transparent" speed="1" style="width: 1000px; height: 500px; display: flex; justify-content: center; align-items: center;" hover loop autoplay></lottie-player>
                        </div>
                    </main>
                </div>
            </div>


            <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>



            <div class=" my-4">

                <footer class="bg-dark text-center text-white">

                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2023 Copyright By Ananta:
                    </div>
                </footer>

            </div>
        </body>

        </html>

<?php
    } else {
        header("location: login.php");
    }
} else {
    header("location: login.php");
}
?>