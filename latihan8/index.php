<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Utama</title>
    </head>

    <body>
        <h2>DATA MAHASISWA JTI POLIJE</h2>
        <br>

        <a href="tambah.php">TAMBAH DATA MHS</a>
        <br/>
        <br/>
        <table border="1" cellpadding="10" align="center">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>OPSI</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from data");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Nim']; ?></td>
                    <td><?php echo $d['Nama']; ?></td>
                    <td><?php echo $d['Prodi']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
