<?php
//cek nim kalau ada atau tidak ada
$nim = 0;
if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];
} else {
    header('Location: index.php');
}

//2. panggil function delete di Mahasiswa.php
include_once('Model/Mahasiswa.php');

//3. eksekusi query
$mhs = new Mahasiswa();
$mhs->nim = $nim;

$mhs->delete();

header('Location: index.php');
?>