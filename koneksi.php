<?php

    $conn = mysqli_connect('localhost', 'root', '', 'db_sekolah');
    if(!$conn){
        echo 'gagal terhubung';
    }

?>