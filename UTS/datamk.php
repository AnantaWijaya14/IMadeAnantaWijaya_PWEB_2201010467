<?php
include("konfigurasi.php");

$jdpage = "List";
$pg = "mk/mklist.php";
$footer = "";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
    $act = $_POST["act"];
    switch ($act) {
        case "store":
            $nama = $_POST["txNAMA"];
            $dosen_pengajar = $_POST["txDOSEN"];
            $jml_sks = $_POST["txSKS"];
            $semester = $_POST["txSEMESTER"];
            $ruangan = $_POST["txRUANGAN"];
            $idmk = md5($nama);
            $sql = "INSERT INTO tbmk(nama, dosen_pengajar, jml_sks, semester, ruangan, idmk) VALUES('$nama', '$dosen_pengajar', '$jml_sks', '$semester','$ruangan', '$idmk');";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Matakuliah berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Matakuliah gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            }


            break;
        case "update":
            $nama = $_POST["txNAMA"];
            $dosen_pengajar = $_POST["txDOSEN"];
            $jml_sks = $_POST["txSKS"];
            $semester = $_POST["txSEMESTER"];
            $ruangan = $_POST["txRUANGAN"];
            $idmk = $_POST["idmk"];
            $sql = "UPDATE tbmk SET nama='$nama', dosen_pengajar='$dosen_pengajar', jml_sks ='$jml_sks' , semester ='$semester', ruangan = '$ruangan' WHERE idmk='$idmk';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Matakuliah berhasil diperbarui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Matakuliah gagal diperbarui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            }

            break;
        case "destroy":
            $idmk = $_POST['idmk'];
            $sql = "DELETE FROM tbmk WHERE idmk='$idmk';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data Matakuliah berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data Matakuliah gagal dihapus',
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
            $pg = "mk/mknew.php";
            break;
        case "edit":
            $jdpage = "Ubah";
            $pg = "mk/mkedit.php";
            break;
        case "del":
            $jdpage = "Hapus";
            $pg = "mk/mkdel.php";
            break;
        default:
            $jdpage = "List";
            $pg = "mk/mklist.php";
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
                        <a class="nav-link me-3" href="datamahasiswa.php">DataMahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-3" href="datamk.php">DataMatakuliah</a>
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