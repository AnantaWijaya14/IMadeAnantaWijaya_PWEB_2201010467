<h3>Daftar Dosen</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">NIP</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No Telepon</th>
            <th scope="col"><a href="datadosen.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT tu.nama, tu.nip, tu.jabatan, tu.jeniskelamin, tu.notlp, tu.iddsn FROM tbdsn tu ORDER BY tu.nama;";
        $hasil = mysqli_query($cnn, $sql);
        $cx = 0;
        while ($h = mysqli_fetch_assoc($hasil)) {
            $cx++;
        ?>
            <tr>
                <th scope="row"><?= $cx ?></th>
                <td><?= $h["nama"] ?></td>
                <td><?= $h["nip"] ?></td>
                <td><?= $h["jabatan"] ?></td>
                <td><?= $h["jeniskelamin"] ?></td>
                <td><?= $h["notlp"] ?></td>
                <td><a href="datadosen.php?aksi=edit&p1=<?= $h["iddsn"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                    <a href="datadosen.php?aksi=del&p1=<?= $h["iddsn"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
                </td>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>