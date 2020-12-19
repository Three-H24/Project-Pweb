<link rel="stylesheet" href="styleForm.css">
<div class="container w-50 rounded-lg">
    <h1>Form Tambah Mahasiswa</h1>
    <form action="prosesTambah.php" method="GET">
        <div class="form-group">
            <label>Nim Mahasiswa</label>
            <input type="text" class="form-control" name="NIM_mahasiswa" required>
        </div>

        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control" name="Nama_mahasiswa" required>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select name="jk_mahasiswa" class="form-control form-control-lg">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-lg" name="dob_mahasiswa" required>
            </div>
        </div>

        <div class="form-group">
            <label>Alamat Mahasiswa</label>
            <textarea name="alamat_mahasiswa" class="form-control" cols="10" rows="5" required></textarea>
        </div>

        <p>
            <a href="index.php" class="btn btn-outline-primary">Kembali</a>
            <button class="btn btn-success" type="submit">Simpan</button>
        </p>
    </form>
</div>