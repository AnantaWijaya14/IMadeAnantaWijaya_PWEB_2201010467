<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>

    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>


    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="dashboard.php">Ananta Wijaya</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../login.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../dashboard.php">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <div class="dropdown">
                            <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mobile Legend
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="team.php">Teams</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </nav>

            <!-- Card -->
            <div class="container" style="margin-left: 24%;">
                <div class="row mt-2" id="logoEsport">
                    <div class="col-sm-3">
                        <div class="card mt-3" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/1200px-Rex_Regum_Qeon_allmode.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">RRQ Hosi</h2>
                                <p class="card-text"></p>
                                <a href="../datarrq.php" class="btn btn-secondary">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="card mt-3" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/ae.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Alter Ego</h2>
                                <p class="card-text"></p>
                                <a href="../dataae.php" class="btn btn-secondary">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="card mt-3" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/evos.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Evos Legend</h2>
                                <p class="card-text"></p>
                                <a href="../dataevos.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-left: 24%;">
                <div class="row mt-2" id="logoEsport">
                    <div class="col-sm-3">
                        <div class="card mt-5" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/onic.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Onic Esport</h2>
                                <p class="card-text"></p>
                                <a href="../dataonic.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="card mt-5" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/aura.webp" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Aura Esport</h2>
                                <p class="card-text"></p>
                                <a href="../dataaura.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="card mt-5" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/geek.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Geek Slate</h2>
                                <p class="card-text"></p>
                                <a href="../datageek.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-left: 24%;">
                <div class="row mt-2" id="logoEsport">
                    <div class="col-sm-3">
                        <div class="card mt-5" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/rebelion_zion.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Rebelion Zion</h2>
                                <p class="card-text"></p>
                                <a href="../datarbl.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="card mt-5" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/bigetron.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Bigetron Alpha</h2>
                                <p class="card-text"></p>
                                <a href="../databtr.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ps-4">
                        <div class="card mt-5" style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/foto/dewa.png" class="card-img-top" alt="..." style="width: 260px" height="190px" />
                            <div class="card-body">
                                <h2 class="card-title">Dewa United</h2>
                                <p class="card-text"></p>
                                <a href="../datadewa.php" class="btn btn-secondary" style="display: inline-block; margin-left: 15%;">Lihat Details </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Card -->

            <!-- Footer -->
            <div class=" my-4">

                <footer class="bg-dark text-center text-white">

                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2023 Copyright By Ananta:
                    </div>
                </footer>

            </div>
            <!-- Akhir Footer -->

            <!-- script -->
            <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Akhir script -->

</body>

</html>