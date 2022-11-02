<?php
include "koneksi.php";

if (isset($_GET['data'])) {

    $id_mapel = $_GET['data'];

    $query = "DELETE FROM tbl_mapel WHERE id_mapel = '$id_mapel'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "
            <script>
                alert('Data Berhasil Dihapus !')
                document.location.href = 'data_mapel.php';
            </script>";
    }
}
