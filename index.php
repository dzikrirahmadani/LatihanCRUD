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
    </style>

</head>
<body style="font-family: otr;">
    
<main class="min-h-[100vh] flex items-center justify-center" style="background-image: url(img/circleholo.jpg); background-repeat: no-repeat; background-size: cover;">
    <glass class="glass bg-transparent backdrop-blur-sm min-h-[100vh] w-[100%] rounded-lg">
        <nav class="fixed w-full h-[60px] bg-slate-900/50 backdrop-blur-xl bg-transparent border-b-[1px] border-slate-500 rounded-b-[50px]">
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

        <h1 class="text-white text-[35px] text-center mt-[200px]">TOTAL DATA SEKOLAH</h1>
        <div class="cards flex justify-center gap-[50px] pt-[100px]">
            <a href="data_siswa.php" class="card-1 bg-slate-900/20 w-[300px] h-[30px] border-[1px] border-slate-500/30 rounded-xl backdrop-blur-xl text-white">
                <h1 class="text-center items-center">Jumlah Siswa</h1>
                <p class="text-center mt-2">30</p>
            </a>
            <a href="data_guru.php" class="card-2 bg-slate-900/20 w-[300px] h-[30px] border-[1px] border-slate-500/30 rounded-xl backdrop-blur-xl text-white">
                <h1 class="text-center items-center">Jumlah Guru</h1>
                <p class="text-center mt-2">10</p>
            </a>
            <a href="data_mapel.php" class="card-3 bg-slate-900/20 w-[300px] h-[30px] border-[1px] border-slate-500/30 rounded-xl backdrop-blur-xl text-white">
                <h1 class="text-center items-center">Jumlah Mapel</h1>
                <p class="text-center mt-2">14</p>
            </a>
        </div>
    </glass>
</main>
<footer class="absolute text-xs text-white bottom-0 left-0 font-semibold m-2" style="font-family: sans-serif">Create With 👍 By © Dzikri Rahmadani</footer>

</body>
</html>