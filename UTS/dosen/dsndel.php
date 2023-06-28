<?php
$iddsn = $_GET["p1"];
$sql = "SELECT tu.nama, tu.nip, tu.jabatan, tu.jeniskelamin, tu.notlp FROM tbdsn tu WHERE tu.iddsn='$iddsn';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Hapus Data Dosen <?= $h["jabatan"] ?></h3>
    <form method="POST" action="datadosen.php">
        <input type="hidden" name="act" value="destroy">
        <input type="hidden" name="iddsn" value="<?= $iddsn ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNIP" class="form-control" id="floatingInput" placeholder="Nip" value="<?= $h["nip"] ?>">
            <label for="floatingInput">NIP</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txJABATAN" class="form-control" id="floatingInput" placeholder="Jabatan" value="<?= $h["jabatan"] ?>">
            <label for="floatingInput">Jabatan</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txJENISKELAMIN" class="form-control" id="floatingInput" placeholder="Jenis Kelamin" value="<?= $h["jeniskelamin"] ?>">
                <option> <label>- Jenis Kelamin -</label> </option>
                <option> <label for="floatingInput">Laki-laki</label> </option>
                <option> <label for="floatingInput">Perempuan</label> </option>
            </select>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNOTLP" class="form-control" id="floatingInput" placeholder="No Telepon" value="<?= $h["notlp"] ?>">
            <label for="floatingInput">No Telepon</label>
        </div>
        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-danger"> Hapus Data Dosen </button>
        <a href="datadosen.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datadosen.php';</script>";
}
?>