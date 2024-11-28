<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tempat / Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1;
        foreach ($mahasiswa as $key => $value) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->nim ?></td>
                <td><?= $value->nama_mahasiswa ?></td>
                <td><?= $value->tempat_lahir ?> / <?= date('d M Y', strtotime($value->tanggal_lahir)) ?></td>
                <td><?= $value->jenis_kelamin ?></td>
            </tr>
        <?php }  ?>

        
    </tbody>
</table>