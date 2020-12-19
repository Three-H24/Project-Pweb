<?php
//cek nim kalau ada atau tidak ada
$nim = 0;
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
} else {
    header('Location: index.php');
}

//kondisi nim ada
//2. panggil settingan database
include_once('Model/Mahasiswa.php');

//3. eksekusi query
$mahasiswa_1 = new Mahasiswa();
$mhslist = $mahasiswa_1->getByPrimaryKey($nim);
$mahasiswa = [];
while ($mhs = mysqli_fetch_assoc($mhslist)) {
    $mahasiswa = $mhs;
}
if (count($mahasiswa) === 0) {
    header('Location: index.php');
}
?>
<link rel="stylesheet" href="styleForm.css">
<div class="container w-50 rounded-lg">
    <h1>Form Ubah Mahasiswa</h1>
    <form action="prosesUbah.php" method="GET">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nim Mahasiswa</label>
            <div class="col-sm-10">
                <input class="form-control form-control-lg" type="text" readonly value="<?= $mahasiswa['NIM_mahasiswa'] ?>" name="NIM_mahasiswa" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                <input class="form-control form-control-lg" type="text" value="<?= $mahasiswa['nama_mahasiswa'] ?>" name="Nama_mahasiswa" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="form-control form-control-lg" name="jk_mahasiswa">
                    <?php
                    $sL = $mahasiswa['jk_mahasiswa'] === 'L' ? 'selected' : '';
                    $sP = $mahasiswa['jk_mahasiswa'] === 'P' ? 'selected' : '';
                    ?>
                    <option <?= $sL ?> value="L">Laki-laki</option>
                    <option <?= $sP ?> value="P">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input class="form-control form-control-lg" type="date" value="<?= $mahasiswa['dob_mahasiswa'] ?>" name="dob_mahasiswa" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat Mahasiswa</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat_mahasiswa" cols="10" rows="5" required><?= $mahasiswa['alamat_mahasiswa'] ?></textarea>
            </div>
        </div>

        <p>
            <a href="index.php" class="btn btn-outline-dark">Kembali</a>
            <button class="btn btn-outline-success" type="submit">Simpan</button>
        </p>
    </form>
</div>