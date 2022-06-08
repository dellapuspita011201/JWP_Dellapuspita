<?php

    // mendapatkan data segitiga.txt
    $data_segitiga = unserialize(file_get_contents('./data/segitiga.txt'));
    // mendapatkan data lingkaran.txt
    $data_lingkaran = unserialize(file_get_contents('./data/lingkaran.txt'));
    // mendapatkan data persegi.txt
    $data_persegi = unserialize(file_get_contents('./data/persegi.txt'));

    // menjumlahkan semua data bangun datar
    $jumlah_bangun_datar = count($data_segitiga) + count($data_lingkaran) + count($data_persegi);

    // menampilkan persentase segitiga
    $persentase_segitiga = count($data_segitiga) / $jumlah_bangun_datar * 100;

    // menampilkan persentase lingkaran
    $persentase_lingkaran = count($data_lingkaran) / $jumlah_bangun_datar * 100;

    // menampilkan persentase persegi
    $persentase_persegi = count($data_persegi) / $jumlah_bangun_datar * 100;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWP_Della</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-4.6/css/bootstrap.min.css">
    <!-- CSS Dashboard -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <!-- CSS Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar Menu -->
    <header class="container-fluid">
        <div class="row bg-dark">
            <div class="col-md-12">
                <nav class="navbar navbar-info bg-dark">
                    <a href="#" class="navbar-brand text-light">Junior Web Programming</a>
                </nav>
            </div>
        </div>
    </header>
    <!-- Baris Akhir Navbar Menu -->

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Menu -->
            <div class="col-md-2 border bg-dark">
                <br>
                <ul class="navbar-nav">
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link  text-light" href="index.php"><i class="fas fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="segitiga.php"><i class="fas fa-eject"></i> Segitiga</a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="persegi.php"><i class="fas fa-square"></i> Persegi</a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="lingkaran.php"><i class="fas fa-circle"></i> Lingkaran</a>
                    </li>

                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                    <li class="nav-item active mb-md-4 ml-md-4">
                        <a class="nav-link text-light" href="#"><i></i></a>
                    </li>
                </ul>
            </div>
            <!--Baris Akhir Sidebar Menu -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 border border-info">
                <h3 class=" mt-lg-1 pt-lg-3 pr-5 text-center">APLIKASI PERHITUNGAN BANGUN DATAR</h3>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-info">
                            <div class="inner">
                                <h3><?= $jumlah_bangun_datar ?><span> Kali</span></h3>
                                <p> Total Perhitungan </p>
                            </div>
                            <div class="icon fa fa-plus-square">
                                <i class="" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h3> 5 </h3>
                                <p> Nilai Maksimum </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-secondary">
                            <div class="inner">
                                <h3> 5 </h3>
                                <p> Nilai Minimun </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-window-minimize"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-red">
                            <div class="inner">
                                <h3><?= round($persentase_segitiga) ?><span> %</span></h3>
                                <p> Persentase Segitiga </p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-eject"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h3><?= round($persentase_persegi) ?><span> %</span></h3>
                                <p> Persentasi Persegi </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-square"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card-box bg-green">
                            <div class="inner">
                                <h3><?= round($persentase_lingkaran) ?><span> %</span></h3>
                                <p> Persentasi Lingkaran </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container-fluid">
        <div class="row shadow bg-dark text-light">
            <div class="col-md-12">
                <div class="col-12 p-3">LSPTIK, Politala &copy 2022</div>
            </div>
        </div>
    </footer>
    <!-- Baris Akhir Footer  -->

    <!-- Javascript JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Javascript Bootstrap -->
    <script src="assets/vendors/bootstrap-4.6/js/bootstrap.min.js"></script>

</body>

</html>