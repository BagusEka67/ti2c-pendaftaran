<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Mahasiswa Baru | Politeknik Negeri Madiun</title>
        <link rel="stylesheet" type="text/css" href="list-mahasiswa.css">
    </head>
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data berikut?");
        }
        function confirmEdit() {
            return confirm("Apakah Anda yakin ingin mengedit data berikut?");
        }
    </script>
    <body>
        <header>
            <h3>Mahasiswa yang sudah mendaftar</h3>
        </header>
        <nav>
            <a href="form-daftar.php">[+] Tambah Baru</a>
        </nav>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_mahasiswa";
                $query = mysqli_query($db, $sql);
                while($mahasiswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$mahasiswa['id']."</td>";
                    echo "<td>".$mahasiswa['nama']."</td>";
                    echo "<td>".$mahasiswa['alamat']."</td>";
                    echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
                    echo "<td>".$mahasiswa['agama']."</td>";
                    echo "<td>".$mahasiswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$mahasiswa['id']."' onclick='return confirmEdit()'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$mahasiswa['id']."' onclick='return confirmDelete()'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        </body>
</html>