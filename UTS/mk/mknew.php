<h3>Tambah Data Matakuliah</h3>
<form method="POST" action="datamk.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Matakuliah">
        <label for="floatingInput">Nama Matakuliah</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txDOSEN" class="form-control" id="floatingInput" placeholder="Dosen Pengajar">
        <label for="floatingInput">Dosen Pengajar</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSKS" class="form-control" id="floatingInput" placeholder="Jumlah SKS">
        <label for="floatingInput">Jumlah SKS</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txSEMESTER" class="form-control" id="floatingInput" placeholder="Semester">
        <label for="floatingInput">semester</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txRUANGAN" class="form-control" id="floatingInput" placeholder="Ruangan">
        <label for="floatingInput">Ruangan</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Matakuliah</button>
    <a href="datamk.php" class="btn btn-secondary"> Batal </a>
</form>