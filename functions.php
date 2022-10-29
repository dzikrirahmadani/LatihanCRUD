<?php

    // VARIABEL
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_sekolah";

    // Koneksi MySQL

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    // Cek Koneksi
    if (!$koneksi) {
        die("Koneksi gagal: ". mysqli_connect_error());
    }

    // Putuskan Koneksi
    // mysqli_close($koneksi);

?>