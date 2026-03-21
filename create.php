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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-xl bg-white shadow-lg rounded-xl p-8">
        
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Tambah Daftar Mahasiswa Baru
        </h2>

        <form class="space-y-4" method="POST" action="create.php">

            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama Lengkap
                </label>
                <input type="text"
                    placeholder="Nama Kamu..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    id="nama" required name="nama">
            </div>

          
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nim
                </label>
                <input type="text"
                    placeholder="Nim Kamu..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" id="nim"
                    required name="nim">
            </div>

          
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Jurusan
                </label>
                <input type="text"
                    placeholder="Jurusan Kamu..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" id="jurusan"
                    required name="jurusan">
            </div>


            <div class="flex gap-2">

            <a href="http://" class="w-64 text-center bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded-lg transition duration-200" >
               kembali </a>
            </button>

            <button type="submit" name="submit"
                class="w-64 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200">
                Tambah
            </button>
            </div>

        </form>
    </div>

</body>
</html>