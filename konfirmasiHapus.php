<?php
//cek nim kalau ada atau tidak ada
$nim = 0;
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
} else {
    header('Location: index.php');
}

//2. panggil settingan database
include_once('Model/Mahasiswa.php');

//3. eksekusi query
$mahasiswa = new Mahasiswa();
$mhsList = $mahasiswa->getByPrimaryKey($nim);
$mahasiswa = [];
while ($mhs = mysqli_fetch_assoc($mhsList)) {
    $mahasiswa = $mhs;
}
if (count($mahasiswa) === 0) {
    header('Location: index.php');
}
?>
<link rel="stylesheet" href="styleForm.css">
<div class="container w-25 rounded-lg">
    <h1 class="text text-capitalize font-italic">Hapus data</h1>
    <form action="prosesHapus.php" method="POST">
        <div class="table-responsive">
            <table class="table table-secondary table-bordered rounded-lg">
                <tr>
                    <td>Nim</td>
                    <td><?= $mahasiswa['NIM_mahasiswa'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?= $mahasiswa['nama_mahasiswa'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $mahasiswa['alamat_mahasiswa'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><?= $mahasiswa['dob_mahasiswa'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= $mahasiswa['jk_mahasiswa'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                </tr>
            </table>
        </div>

        <input type="hidden" name="nim" value="<?= $mahasiswa['NIM_mahasiswa'] ?>">
        <a class="btn btn-outline-light" href="index.php">Kembali</a>
        <!-- <input class="btn btn-outline-danger" type="submit" value="Hapus" /> -->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
            Hapus
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Anda tidak akan bisa mengembalikan data yang sudah Anda hapus!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>