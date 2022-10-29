<?php
    include 'koneksi.php';

    // Menampilkan
    $query = 'SELECT * FROM tbl_siswa';
    $sql = mysqli_query($conn, $query);

    $no = 1;


    // Menghapus
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amarante&display=swap');
        
        @font-face {
            font-family: otr;
            src: url(fonts/OTRtype-Regular.woff);
        }
        @font-face {
            font-family: ilyas;
            src: url(fonts/ilyas.woff);
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>

</head>
<body style="font-family: otr;">
    
<main class="min-h-[100vh] w-full flex flex-col items-center justify-center" style="background-image: url(img/circleholo.jpg); background-repeat: no-repeat; background-size: cover;">

        <nav class="fixed z-[10000] top-0 w-[100%] h-[60px] bg-slate-900/50 backdrop-blur-xl bg-transparent border-b-[1px] border-slate-500 rounded-b-[50px]">
            <ul class="flex justify-center items-center h-[100%]">
                <a href="" class="font-semibold text-white ml-[-200px]">DATA SEKOLAH</a>
                <li class="px-5 ml-[500px] font-semibold hover:text-sky-500 text-white">
                    <a href="index.php">BERANDA</a>
                </li>
                <li class="px-5 font-semibold text-white hover:text-sky-500">
                    <a href="data_siswa.php">SISWA</a>
                </li>
                <li class="px-5 font-semibold text-white hover:text-sky-500">
                    <a href="data_guru.php">GURU</a>
                </li>
                <li class="px-5 font-semibold text-white hover:text-sky-500">
                    <a href="data_mapel.php">MAPEL</a>
                </li>
            </ul>
        </nav>

        <h1 class="text-white text-[35px] text-center mt-20 mb-5">TOTAL DATA SISWA</h1>
        <div class="mb-10">
            <div class="btns flex gap-[15px]">
                <div class="btn-tambah">
                    <a href="input_siswa.php" type="submit" class="text-white px-4 py-1 bg-white/10 border-[1px] border-slate-50 rounded-lg hover:bg-transparent hover:backdrop-blur-xl">Tambah Data</a>
                </div>
            </div>

            
            <table class="text-white bg-white/10 backdrop-blur-lg mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($result = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $result['nama']; ?>
                        </td>
                        <td>
                            <?php echo $result['kelas']; ?>
                        </td>
                        <td>
                            <?php echo $result['jurusan']; ?>
                        </td>
                        <td>
                            <?php echo $result['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <div class="flex gap-2">

                                <a href="ubah_guru.php" class="border-[1px] rounded-md bg-white/10 hover:bg-green-600/90"><img src="img/pen.svg" alt="" width="40"></a>
                            

                                <a href="data_siswa.php?id=<? $result['id_siswa'];?>" type="submit" name="hapus" class="border-[1px] rounded-md bg-white/10 hover:bg-red-600/90"><img src="img/trash.svg" alt="" width="40"></a>

                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    <!-- <footer class="fixed z-[10000] w-full text-xs text-white bottom-0 font-semibold ml-5 m-2" style="font-family: sans-serif">Create With 👍 By © Dzikri Rahmadani</footer> -->
</main>
<footer class="absolute text-xs text-white bottom-0 left-0 font-semibold m-2" style="font-family: sans-serif">Create With 👍 By © Dzikri Rahmadani</footer>
</body>
</html>