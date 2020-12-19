<?php
//1. Ambil semua parameter yang dikirim lewat form

include_once('Model/Mahasiswa.php');
$mhs = new Mahasiswa();

$mhs->nim = $_GET['NIM_mahasiswa'];
$mhs->nama = $_GET['Nama_mahasiswa'];
$mhs->jenisKelamin = $_GET['jk_mahasiswa'];
$mhs->tanggalLahir = $_GET['dob_mahasiswa'];
$mhs->alamat = $_GET['alamat_mahasiswa'];

$mhs->insert();
header('Location: index.php');
