<?php
include "koneksi.php";

if (isset($_GET['data'])) {

    $id_siswa = $_GET['data'];

    $query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id_siswa'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "
            <script>
                alert('Data Berhasil Dihapus !')
                document.location.href = 'data_siswa.php';
            </script>";
    }
}
