<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', telp='$telp', prodi='$prodi' WHERE id_mahasiswa=$id_mahasiswa";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}