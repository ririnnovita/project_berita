<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/news.jpg" type="image/ico">
    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body>

    <div class="wrap">

        <header role="banner">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 social">
                            <!-- <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-youtube-play"></span></a> -->

                            <?php if ($this->session->userdata('username')) : ?>
                                <p class="d-inline text-white">Selamat Datang <?= $this->session->userdata('username') ?></p>
                                <a href="<?= base_url('auth/logout_pengguna'); ?>" class="btn btn-danger">Logout</a>
                            <?php else : ?>
                                <a href="<?= base_url('auth/login'); ?>" class="btn btn-success text-white">Login</a>
                                <a href="<?= base_url('registrasi/index'); ?>" class="btn btn-primary text-white">Daftar</a>
                            <?php endif; ?>
                        </div>
                        <div class="col-3 search-top">
                            <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                            <form action="<?= base_url(); ?>" class="search-top-form" method="post">
                                <!-- <button class="btn" type="submit"><i class="icon fa fa-search"></i></button> -->
                                <span class="icon fas fa-search"></span>
                                <input type="text" placeholder="Masukkan kata kunci" name="keyword">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container logo-wrap">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                        <h1 class="site-logo"><a href="index.html">Suara Rakyat Indonesia</a></h1>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md  navbar-light bg-light">
                <div class="container">


                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url(); ?>">Home</a>
                            </li>
                            <?php $menu = $this->db->get('kategori')->result();
                            foreach ($menu as $m) {
                            ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url("$m->link"); ?>"><?= $m->kategori ?></a>
                                </li>

                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
        <!-- END header -->