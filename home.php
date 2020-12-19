<div class="card card-header text text-center text-light">
    <h1>Mahasiswa Cloud</h1>
    <p>Selamat datang di SIAK Mahasiswa</p>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-primary table-hover">
        <thead class="thead-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat Mahasiswa</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        include_once('Model/Mahasiswa.php');
        $mhsList = Mahasiswa::getAll();
        while ($mhs = mysqli_fetch_array($mhsList)) {
            $tanggalLahir = date('j F Y', strtotime($mhs['dob_mahasiswa']));
        ?>
            <tbody>
                <tr>
                    <td><?= $mhs['NIM_mahasiswa'] ?></td>
                    <td><?= $mhs['nama_mahasiswa'] ?></td>
                    <td><?= $mhs['jk_mahasiswa'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                    <td><?= $tanggalLahir ?></td>
                    <td><?= $mhs['alamat_mahasiswa'] ?></td>
                    <td>
                        <a class="btn btn-outline-dark" data-toogle="tooltip" title="Edit" href="index.php?page=edit&nim=<?= $mhs['NIM_mahasiswa'] ?>">
                            <i class="fa fa-user-edit"></i>
                        </a>
                        <a class="btn btn-outline-danger" href="index.php?page=delete&nim=<?= $mhs['NIM_mahasiswa'] ?>" data-toogle="tooltip" title="Hapus">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</div>
<a class="btn btn-outline-secondary text-dark" href="index.php?page=register">Tambah Mahasiswa</a>