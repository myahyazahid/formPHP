

        <form action="create.php" method="POST">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim"> <br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nim"><br>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan"> <br>

        <input type="submit" name="submit" value="tambah">


    </form>

<?php 
include 'config.php';



if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "insert into mahasiswa (nim,nama,jurusan) values ('$nim','$nama','$jurusan')";

    mysqli_query($koneksi, $query);
    echo "<script> alert('Data Berhasil Ditambahkan !')</script>";

    }


?>