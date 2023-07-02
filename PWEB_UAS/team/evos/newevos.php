<h3>Tambah Data Pemain</h3>
<form method="POST" action="dataevos.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInputNama" placeholder="Nama Lengkap">
        <label for="floatingInputNama">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNN" class="form-control" id="floatingInputNickname" placeholder="Nickname">
        <label for="floatingInputNickname">Nickname</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txUMUR" class="form-control" id="floatingInputUmur" placeholder="Umur">
        <label for="floatingInputUmur">Umur</label>
    </div>
    <div class="form-floating mb-3">
        <select name="txROLE" class="form-control" id="floatingInputRole" placeholder="Role">
            <option>- Role -</option>
            <option value="Junggler">Junggler</option>
            <option value="Midlaner">Midlaner</option>
            <option value="Roamer">Roamer</option>
            <option value="Goldlaner">Goldlaner</option>
            <option value="Explaner">Explaner</option>
        </select>
        <label for="floatingInputRole">Role</label>
    </div>
    <div class="form-floating mb-3">
        <select name="txJENISKELAMIN" class="form-control" id="floatingInputJenisKelamin" placeholder="Jenis Kelamin">
            <option>- Jenis Kelamin -</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <label for="floatingInputJenisKelamin">Jenis Kelamin</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNEGARA" class="form-control" id="floatingInputNegara" placeholder="Negara">
        <label for="floatingInputNegara">Negara</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary">Buat Data Pemain</button>
    <a href="dataevos.php" class="btn btn-secondary">Batal</a>
</form>