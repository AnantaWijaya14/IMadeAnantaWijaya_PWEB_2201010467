<?php
$idmhs = $_GET["p1"];
$sql = "SELECT tu.nama, tu.nim, tu.prodi, tu.jeniskelamin, tu.tgl_lahir FROM tbmhs tu WHERE tu.idmhs='$idmhs';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Hapus Data Mahasiswa <?= $h["prodi"] ?></h3>
    <form method="POST" action="datamahasiswa.php">
        <input type="hidden" name="act" value="destroy">
        <input type="hidden" name="idmhs" value="<?= $idmhs ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Nim" value="<?= $h["nim"] ?>">
            <label for="floatingInput">NIM</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Prodi" value="<?= $h["prodi"] ?>">
            <label for="floatingInput">Prodi</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txJENISKELAMIN" class="form-control" id="floatingInput" placeholder="Jenis Kelamin" value="<?= $h["jeniskelamin"] ?>">
                <option> <label>- Jenis Kelamin -</label> </option>
                <option> <label for="floatingInput">Laki-laki</label> </option>
                <option> <label for="floatingInput">Perempuan</label> </option>
            </select>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txTGLLAHIR" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" value="<?= $h["tgl_lahir"] ?>">
            <label for="floatingInput">Tanggal Lahir</label>
        </div>
        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-danger"> Hapus Data Mahasiswa </button>
        <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datamahasiswa.php';</script>";
}
?>