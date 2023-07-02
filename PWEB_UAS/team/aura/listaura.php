<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nickname</th>
            <th scope="col">Umur</th>
            <th scope="col">Role</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Negara</th>
            <th scope="col"><a href="dataaura.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT tu.nama, tu.nickname, tu.umur, tu.role, tu.jeniskelamin, tu.negara, tu.idaura FROM tbaura tu ORDER BY tu.nama;";
        $hasil = mysqli_query($cnn, $sql);
        $cx = 0;
        while ($h = mysqli_fetch_assoc($hasil)) {
            $cx++;
        ?>
            <tr>
                <th scope="row"><?= $cx ?></th>
                <td><?= $h["nama"] ?></td>
                <td><?= $h["nickname"] ?></td>
                <td><?= $h["umur"] ?></td>
                <td><?= $h["role"] ?></td>
                <td><?= $h["jeniskelamin"] ?></td>
                <td><?= $h["negara"] ?></td>
                <td><a href="dataaura.php?aksi=edit&p1=<?= $h["idaura"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                    <a href="dataaura.php?aksi=del&p1=<?= $h["idaura"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
                </td>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>