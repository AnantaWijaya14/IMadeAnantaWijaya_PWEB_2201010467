<?php
$cnn = mysqli_connect("localhost", "root", "", "pweb_uas");
$idgeek = $_GET["p1"];
$sql = "SELECT tu.nama,tu.nickname, tu.umur, tu.role , tu.jeniskelamin, tu.negara FROM tbgeek tu WHERE tu.idgeek='$idgeek';";
$hasil = mysqli_query($cnn, $sql);
if (mysqli_num_rows($hasil) > 0) {
    $h = mysqli_fetch_assoc($hasil);
?>
    <h3>Ubah Data Pemain <?= $h["nama"] ?></h3>
    <form method="POST" action="datageek.php">
        <input type="hidden" name="act" value="update">
        <input type="hidden" name="idgeek" value="<?= $idgeek ?>">
        <div class="form-floating mb-3">
            <input type="text" name="txNAMA" class="form-control" id="floatingInputNama" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
            <label for="floatingInputNama">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txNN" class="form-control" id="floatingInputNickname" placeholder="Nick Name" value="<?= $h["nickname"] ?>">
            <label for="floatingInputNickname">NickName</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="txUMUR" class="form-control" id="floatingInputUmur" placeholder="Umur" value="<?= $h["umur"] ?>">
            <label for="floatingInputUmur">Umur</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txROLE" class="form-control" id="floatingInputRole">
                <option>- Role -</option>
                <option value="Junggler" <?php if ($h["role"] == "Junggler") echo "selected"; ?>>Junggler</option>
                <option value="Midlaner" <?php if ($h["role"] == "Midlaner") echo "selected"; ?>>Midlaner</option>
                <option value="Roamer" <?php if ($h["role"] == "Roamer") echo "selected"; ?>>Roamer</option>
                <option value="Goldlaner" <?php if ($h["role"] == "Goldlaner") echo "selected"; ?>>Goldlaner</option>
                <option value="Explaner" <?php if ($h["role"] == "Explaner") echo "selected"; ?>>Explaner</option>
            </select>
            <label for="floatingInputRole">Role</label>
        </div>
        <div class="form-floating mb-3">
            <select name="txJENISKELAMIN" class="form-control" id="floatingInputJenisKelamin">
                <option>- Jenis Kelamin -</option>
                <option value="Laki-laki" <?php if ($h["jeniskelamin"] == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($h["jeniskelamin"] == "Perempuan") echo "selected"; ?>>Perempuan</option>
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
        <button type="submit" class="btn btn-primary"> Ubah Data Pemain </button>
        <a href="datageek.php" class="btn btn-secondary"> Batal </a>
    </form>
<?php
} else {
    echo "<script>window.location.href='datageek.php';</script>";
}

mysqli_close($cnn);
?>