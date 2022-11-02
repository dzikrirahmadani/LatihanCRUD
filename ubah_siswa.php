<?php
include 'koneksi.php';

if (isset($_GET['data'])) {

    $id_siswa = $_GET['data'];

    $query = "SELECT * FROM tbl_siswa WHERE id_siswa = '$id_siswa'";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);

    if (isset($_POST['ubah-siswa'])) {

        $nama = htmlspecialchars($_POST['nama']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $jurusan = htmlspecialchars($_POST['jurusan']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);

        $query = "UPDATE tbl_siswa SET
                        nama = '$nama',
                        kelas = '$kelas',
                        jurusan = '$jurusan',
                        jenis_kelamin = '$jenis_kelamin' WHERE id_siswa = '$id_siswa'";

        $sql = mysqli_query($conn, $query);
        if ($sql) {
            echo "<script>
                    alert('Data Berhasil Diubah !')
                    document.location.href = 'data_siswa.php';
                </script>";
        }else{
            echo "<script>
                alert('Data Gagal Diubah !')
            </script>";

            var_dump(mysqli_error($conn));
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Sekolah</title>
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
    </style>
</head>
<body style="font-family: otr;">
<main class="min-h-[100vh] flex items-center justify-center" style="background-image: url(img/circleholo.jpg); background-repeat: no-repeat; background-size: cover;">
    <glass class="glass bg-transparent backdrop-blur-sm min-h-[100vh] w-[100%] rounded-lg">
        <nav class="fixed w-full h-[60px] bg-slate-900/50 backdrop-blur-xl border-b-[1px] border-slate-500 rounded-b-[50px]">
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

        <h1 class="text-white text-[35px] text-center mt-[120px]">UBAH DATA SISWA</h1>
        <div class="form m-auto w-[600px] h-[370px] backdrop-blur-lg bg-slate-500/5 rounded-xl border-[1px] border-slate-500">
            <div class="inputs grid justify-center text-white">
            <form action="" method="POST">
                <div class="">
                    <span>Nama</span>
                    <span class="ml-[34px]">:</span>
                    <input type="text" name="nama" class="bg-slate-500/10 rounded-xl border-[1px] border-slate-500 outline-none mt-10 px-5" value="<?=$result['nama']?>" required>
                </div>

                <div class="">
                    <span>Kelas</span>
                    <span class="ml-[22px]">:</span>
                    <input type="text" name="kelas" class="bg-slate-500/10 rounded-xl border-[1px] border-slate-500 outline-none mt-10 px-5" value="<?=$result['kelas']?>" required>
                </div>

                <div class="">
                    <span>Jurusan</span>
                    <span class="">:</span>
                    <input type="text" name="jurusan" class="bg-slate-500/10 rounded-xl border-[1px] border-slate-500 outline-none mt-10 px-5" value="<?=$result['jurusan']?>" required>
                </div>

                <div class="mt-10 flex">
                    <span>Jenis Kelamin</span>
                    <span class="ml-2">:</span>
                      <input class="ml-2" type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki" required>
                      <label for="laki-laki">Laki-laki</label><br>
                      <input class="ml-5" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                      <label for="perempuan">Perempuan</label><br>
                </div>
                
                <div class="btn mt-5">
                    <button name="ubah-siswa" type="submit" class="px-4 py-1 bg-slate-500/10 hover:bg-white/20 rounded-lg border-[1px] border-slate-200">Kirim</button>
                    <a href="data_siswa.php" type="submit" class="px-4 py-1 bg-slate-500/10 hover:bg-white/20 hover:text-slate-900 rounded-lg border-[1px] border-slate-200">Batal</a>
                </div>
            </form>
            </div>
        </div>


    </glass>
</main>
</body>
</html>