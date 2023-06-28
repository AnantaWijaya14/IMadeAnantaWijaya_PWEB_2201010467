<h3>Tambah Data Dosen</h3>
<form method="POST" action="datadosen.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIP" class="form-control" id="floatingInput" placeholder="Nip">
        <label for="floatingInput">NIP</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJABATAN" class="form-control" id="floatingInput" placeholder="Jabatan">
        <label for="floatingInput">Jabatan</label>
    </div>
    <div class="form-floating mb-3">
        <select name="txJENISKELAMIN" class="form-control" id="floatingInput" placeholder="Jenis Kelamin">
            <option> <label>- Jenis Kelamin -</label> </option>
            <option> <label for="floatingInput">Laki-laki</label> </option>
            <option> <label for="floatingInput">Perempuan</label> </option>
        </select>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNOTLP" class="form-control" id="floatingInput" placeholder="No Telepon">
        <label for="floatingInput">No Telepon</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Dosen </button>
    <a href="datadosen.php" class="btn btn-secondary"> Batal </a>
</form>