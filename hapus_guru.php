<?php
include "koneksi.php";

if (isset($_GET['data'])) {

    $id_guru = $_GET['data'];

    $query = "DELETE FROM tbl_guru WHERE id_guru = '$id_guru'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "
            <script>
                alert('Data Berhasil Dihapus !')
                document.location.href = 'data_guru.php';
            </script>";
    }
}
