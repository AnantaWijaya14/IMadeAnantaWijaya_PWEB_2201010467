<h3>Daftar Matakuliah</h3>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Matakuliah</th>
            <th scope="col">Dosen Pengajar</th>
            <th scope="col">Jumlah SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Ruangan</th>

            <th scope="col"><a href="datamk.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT tu.nama, tu.dosen_pengajar, tu.jml_sks, tu.semester, tu.ruangan, tu.idmk FROM tbmk tu ORDER BY tu.nama;";
        $hasil = mysqli_query($cnn, $sql);
        $cx = 0;
        while ($h = mysqli_fetch_assoc($hasil)) {
            $cx++;
        ?>
            <tr>
                <th scope="row"><?= $cx ?></th>
                <td><?= $h["nama"] ?></td>
                <td><?= $h["dosen_pengajar"] ?></td>
                <td><?= $h["jml_sks"] ?></td>
                <td><?= $h["semester"] ?></td>
                <td><?= $h["ruangan"] ?></td>
                <td><a href="datamk.php?aksi=edit&p1=<?= $h["idmk"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                    <a href="datamk.php?aksi=del&p1=<?= $h["idmk"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
                </td>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>