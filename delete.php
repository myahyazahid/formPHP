

<?php 
include 'config.php';
    $tes = "Yahya";
    
    $id = $_GET['id'];
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    header("Location: index.php");
    exit;

?>