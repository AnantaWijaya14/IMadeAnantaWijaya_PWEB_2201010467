<?php
$idaura = $_GET["p1"];
$sql = "SELECT tu.nama,tu.nickname, tu.umur, tu.role, tu.jeniskelamin, tu.negara FROM tbaura tu WHERE tu.idaura='$idaura';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Hapus Data <?= $h["nama"] ?></h3>
    <form method="POST" action="dataaura.php">
        <input type="hidden" name="act" value="destroy">
        <input type="hidden" name="idaura" value="<?= $idaura ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInputNama" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
            <label for="floatingInputNama">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNN" class="form-control" id="floatingInputNickname" placeholder="Nickname" value="<?= $h["nickname"] ?>">
            <label for="floatingInputNickname">Nickname</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txUMUR" class="form-control" id="floatingInputUmur" placeholder="UMUR" value="<?= $h["umur"] ?>">
            <label for="floatingInputUmur">Umur</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txROLE" class="form-control" id="floatingInputRole" placeholder="Role">
                <option>- Role -</option>
                <option <?php if ($h["role"] == "Junggler") echo "selected"; ?>>Junggler</option>
                <option <?php if ($h["role"] == "Midlaner") echo "selected"; ?>>Midlaner</option>
                <option <?php if ($h["role"] == "Roamer") echo "selected"; ?>>Roamer</option>
                <option <?php if ($h["role"] == "Goldlaner") echo "selected"; ?>>Goldlaner</option>
                <option <?php if ($h["role"] == "Explaner") echo "selected"; ?>>Explaner</option>
            </select>
            <label for="floatingInputRole">Role</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txJENISKELAMIN" class="form-control" id="floatingInputJenisKelamin" placeholder="Jenis Kelamin">
                <option>- Jenis Kelamin -</option>
                <option <?php if ($h["jeniskelamin"] == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                <option <?php if ($h["jeniskelamin"] == "Perempuan") echo "selected"; ?>>Perempuan</option>
            </select>
            <label for="floatingInputJenisKelamin">Jenis Kelamin</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNEGARA" class="form-control" id="floatingInputNegara" placeholder="Negara" value="<?= $h["negara"] ?>">
            <label for="floatingInputNegara">Negara</label>
        </div>
        <div class="form-floating mb-3">
            &nbsp;
        </div>
        <button type="submit" class="btn btn-danger"> Hapus Data Pemain </button>
        <a href="dataaura.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='dataaura.php';</script>";
}
?>