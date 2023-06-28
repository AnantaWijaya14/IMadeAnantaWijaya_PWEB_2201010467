<?php
include("konfigurasi.php");

$jdpage = "List";
$pg = "mahasiswa/mhslist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
    $act = $_POST["act"];
    switch ($act) {
        case "store":
            $nama = $_POST["txNAMA"];
            $nim = $_POST["txNIM"];
            $prodi = $_POST["txPRODI"];
            $jeniskelamin = $_POST["txJENISKELAMIN"];
            $tgllahir = $_POST["txTGLLAHIR"];
            $idmhs = md5($nim);
            $sql = "INSERT INTO tbmhs(nama, nim, prodi, jeniskelamin, tgl_lahir, idmhs) VALUES('$nama', '$nim', '$prodi', '$jeniskelamin','$tgllahir', '$idmhs');";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Mahasiswa berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Mahasiswa gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            }


            break;
        case "update":
            $nama = $_POST["txNAMA"];
            $nim = $_POST["txNIM"];
            $prodi = $_POST["txPRODI"];
            $jeniskelamin = $_POST["txJENISKELAMIN"];
            $tgllahir = $_POST["txTGLLAHIR"];
            $idmhs = $_POST["idmhs"];
            $sql = "UPDATE tbmhs SET nama='$nama', nim='$nim', prodi ='$prodi' , jeniskelamin ='$jeniskelamin', tgl_lahir = '$tgllahir' WHERE idmhs='$idmhs';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Mahasiswa berhasil diperbarui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Mahasiswa gagal diperbarui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            }

            break;
        case "destroy":
            $idmhs = $_POST['idmhs'];
            $sql = "DELETE FROM tbmhs WHERE idmhs='$idmhs';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Mahasiswa berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Mahasiswa gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            }
            break;
    }
}

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];
    switch ($aksi) {
        case "new":
            $jdpage = "Tambah";
            $pg = "mahasiswa/mhsnew.php";
            break;
        case "edit":
            $jdpage = "Ubah";
            $pg = "mahasiswa/mhsedit.php";
            break;
        case "del":
            $jdpage = "Hapus";
            $pg = "mahasiswa/mhsdel.php";
            break;
        default:
            $jdpage = "List";
            $pg = "mahasiswa/mhslist.php";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title><?= $jdpage ?> - Data Mahasiswa</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand p-2 ms-3" href="dashboard.php">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active me-3" href="datamahasiswa.php">DataMahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="datamk.php">DataMatakuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="datadosen.php">DataDosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="datauser.php">DataUser</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container konten">
        <?php
        include($pg);
        ?>
    </div>
    </div>

    <!--[if !IE]>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!--[if IE]>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?= $footer; ?>

</body>

</html>