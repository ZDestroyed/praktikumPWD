<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Selamat Datang " . $_SESSION['username'];
    echo "<a href='logout.php'>logout</a>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>



    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;

  .button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
}

.aksi-edit, .aksi-hapus {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.aksi-hapus {
    background-color: #f70d05; /* Red */
}

.aksi-edit a, .aksi-hapus a {
    color: white;
    text-decoration: none;
}

.aksi-edit:hover {
    cursor: pointer;
    background-color: #30ba36;
}

.aksi-hapus:hover {
    cursor: pointer;
    background-color: #e33c36;
}
</style>
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <a href="login.php">LOG IN</a>
    <br />
    <br />
    <table id="customers">
        <tr>
            <th>NO</th>
            <th>Nomor identitas</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>no telp</th>
            <th>prodi</th>
            <th>aksi</th>

        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                
                <td>
                    <div class="aksi-edit">
                        <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button1" >EDIT </a>
                    </div>

                    <div class="aksi-hapus">
                        <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button1">HAPUS</a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>