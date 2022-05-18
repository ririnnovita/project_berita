<section class="site-section py-lg">
    <div class="container">

        <div class="row blog-entries element-animate">

            <div class="col-md-12 col-lg-8 main-content">
                <!-- Isi Artikel -->
                <?php foreach ($artikel as $ar) : ?>
                    <?php if ($ar->gambar3) : ?>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= base_url() . 'uploads/' . $ar->gambar; ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url() . 'uploads/' . $ar->gambar2; ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url() . 'uploads/' . $ar->gambar3; ?>" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <?php elseif ($ar->gambar2) : ?>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= base_url() . 'uploads/' . $ar->gambar; ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url() . 'uploads/' . $ar->gambar2; ?>" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <?php else : ?>
                        <img src="<?= base_url() . 'uploads/' . $ar->gambar; ?>" alt="image" class="img-fluid mb-5">
                    <?php endif; ?>
                    <div class="post-meta">
                        <span class="author mr-2"><?= $ar->nama_penulis ?></span>&bullet;
                        <span class="mr-2"><?= $ar->tanggal ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h1 class="mb-4"><?= $ar->judul ?></h1>
                    <a class="category mb-5" href="#"><?= $ar->kategori ?></a>

                    <div class="post-content-body">
                        <p><?= $ar->artikel ?></p>
                    </div>


                    <div class="pt-5">
                        <p>Categories: <a href="#"><?= $ar->kategori ?></a></p>
                    </div>

                    <?= anchor('/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    <!-- <?= anchor('komentar', '<div class="btn btn-sm btn-primary"><i class="fas fa-comment"></i></div>') ?> -->
                <?php endforeach; ?>


                <div class="pt-5">
                    <!-- Jika tidak login maka kolom komentar tidak akan muncul -->
                    <?php if ($this->session->userdata('username')) : ?>
                        <form action="<?= base_url() . 'review/tambah' ?>" method="post" class="mb-3">
                            <div class="form-row align-items-center">
                                <input type="hidden" name="artikelid" value="<?= $ar->id ?>">
                                <input type="hidden" name="username" value="<?= $this->session->userdata('username') ?>">
                                <div class="col-8 my-1">
                                    <input type="text" class="form-control" name="isikomen" placeholder="Tulis Komentar disini">
                                </div>
                                <div class="col-4 my-1">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                    <h3 class="mb-5"><?= count($komentar); ?> Comments</h3>
                    <ul class="comment-list">
                        <?php foreach ($komentar as $ko) : ?>
                            <li class="comment">
                                <div class="vcard">
                                    <img src="<?= base_url() ?>assets/images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3><?= $ko->user ?></h3>
                                    <div class="meta"><?= date("d F Y h:i:s", strtotime($ko->date_created)) ?></div>
                                    <p><?= $ko->isi_komentar ?></p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                            </li>
                        <?php endforeach; ?>

                        <!-- <li class="comment">
                            <div class="vcard">
                                <img src="<?= base_url() ?>assets/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li> -->
                    </ul>
                    <!-- END comment-list -->

                </div>

            </div>

            <!-- END main-content -->

            <!-- Bagian Pencarian -->
            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->



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

                <!-- Bagian Kategori -->
                <div class="sidebar-box">
                    <h3 class="heading">Kategori</h3>
                    <ul class="categories">
                        <?php $menu = $this->db->get('kategori')->result();
                        foreach ($menu as $m) {
                        ?>
                            <li><a href="<?= base_url("$m->link"); ?>"><?= $m->kategori ?> <span>(1)</span></a></li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>