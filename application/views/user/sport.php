<!-- Bagian Carousel -->
<section class="site-section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme home-slider">
                    <?php foreach ($artikel_terbaru as $at) : ?>
                        <div>
                            <a href="<?= base_url('dashboard/detail/' . $at->id) ?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?= base_url() . 'uploads/' . $at->gambar; ?>'); ">
                                <div class="text half-to-full">
                                    <span class="category mb-5"><?= $at->kategori ?></span>
                                    <div class="post-meta">
                                        <span class="author mr-2"><?= $at->nama_penulis ?></span>&bullet;
                                        <span class="mr-2"><?= $at->tanggal ?> </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                    </div>
                                    <h3><?= $at->judul ?></h3>
                                    <p><?= substr($at->artikel, 0, 100); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END section -->

<!-- Bagian Artikel -->
<section class="site-section py-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Artikel Tentang Sport</h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                    <?php foreach ($sport as $ar) : ?>
                        <div class="col-md-6">
                            <a href="<?= base_url('dashboard/detail/' . $ar->id) ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="<?= base_url() . 'uploads/' . $ar->gambar; ?>" alt="Image placeholder">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                        <span class="mr-2"><?= $ar->tanggal ?> </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h2><?= $ar->judul ?></h2>
                                </div>
                            </a>
                        </div>

                    <?php endforeach; ?>


                </div>
            </div>

            <!-- END main-content -->

            <!-- Bagian Pencarian -->
            <div class="col-md-12 col-lg-4 sidebar">


                <!-- Bagian Artikel Terbaru -->
                <div class="sidebar-box">
                    <h3 class="heading">Artikel Terbaru</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            <?php foreach ($artikel_terbaru as $at) : ?>
                                <li>
                                    <a href="<?= base_url('dashboard/detail/' . $at->id) ?>">
                                        <img src="<?= base_url() . 'uploads/' . $at->gambar; ?>" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4><?= $at->judul ?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?= $at->tanggal ?> </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>