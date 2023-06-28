<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Nim">
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Prodi">
        <label for="floatingInput">Prodi</label>
    </div>
    <div class="form-floating mb-3">
        <select name="txJENISKELAMIN" class="form-control" id="floatingInput" placeholder="Jenis Kelamin">
            <option> <label>- Jenis Kelamin -</label> </option>
            <option> <label for="floatingInput">Laki-laki</label> </option>
            <option> <label for="floatingInput">Perempuan</label> </option>
        </select>
    </div>

    <div class="form-floating mb-3">
        <input type="date" name="txTGLLAHIR" class="form-control" id="floatingInput" placeholder="Tanggal Lahir">
        <label for="floatingInput">Tanggal Lahir</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Mahasiswa </button>
    <a href="datamahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>