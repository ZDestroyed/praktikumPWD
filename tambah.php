<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
</head>

<body>
    <header>
        <h3>Tambah Identitas</h3>
    </header>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="telp">Nomor HP: </label>
                <textarea name="telp"></textarea>
            </p>
            <p>
                <label for="prodi">prodi: </label>
                <input type="text" name="prodi" placeholder="prodi" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>