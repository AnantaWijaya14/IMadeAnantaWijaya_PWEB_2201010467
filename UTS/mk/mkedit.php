<?php
$idmk = $_GET["p1"];
$sql = "SELECT tu.nama, tu.dosen_pengajar, tu.jml_sks , tu.semester, tu.ruangan FROM tbmk tu WHERE tu.idmk='$idmk';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Ubah Data Matakuliah <?= $h["nama"] ?></h3>
    <form method="POST" action="datamk.php">
        <input type="hidden" name="act" value="update">
        <input type="hidden" name="idmk" value="<?= $idmk ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Matakuliah" value="<?= $h["nama"] ?>">
            <label for="floatingInput">Nama Matakuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txDOSEN" class="form-control" id="floatingInput" placeholder="Dosen Pengajar" value="<?= $h["dosen_pengajar"] ?>">
            <label for="floatingInput">Dosen Pengajar</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txSKS" class="form-control" id="floatingInput" placeholder="Jumlah SKS" value="<?= $h["jml_sks"] ?>">
            <label for="floatingInput">Jumlah SKS</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txSEMESTER" class="form-control" id="floatingInput" placeholder="Semester" value="<?= $h["semester"] ?>">
            <label for="floatingInput">Semester</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txRUANGAN" class="form-control" id="floatingInput" placeholder="Ruangan" value="<?= $h["ruangan"] ?>">
            <label for="floatingInput">Ruangan</label>
        </div>

        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-primary"> Ubah Data Matakuliah </button>
        <a href="datamk.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datamk.php';</script>";
}
?>