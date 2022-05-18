<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <div class="container-fluid">

            <h1 class="h3 mb-2 text-gray-800 fas fa-edit"> UBAH ARTIKEL</h1>

            <div class="card sahdow mb-4">
                <div class="card-body alert alert-dark">

                    <?php foreach ($artikel as $ar) : ?>
                        <form action="<?= base_url() . 'admin/dashboard_admin/update' ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $ar->id ?>">
                            <div class="from-group">
                                <label>Judul :</label>
                                <input type="text" name="judul" id="judul" class="form-control" required value="<?= $ar->judul ?>">
                            </div>
                            <div class="from-group">
                                <label>Artikel :</label>
                                <textarea name="artikel" id="artikel" cols="120" rows="20" class="form-control"><?= $ar->artikel ?></textarea>
                            </div>
                            <div class="from-group">
                                <label>Kategori :</label>
                                <input name="kategori" id="kategori" class="form-control" required value="<?= $ar->kategori ?>">
                            </div>
                            <div class="from-group">
                                <label>Nama Penulis :</label>
                                <input type="text" name="nama_penulis" id="nama_penulis" class="form-control" required value="<?= $ar->nama_penulis ?>">
                            </div>
                            <div class="from-group">
                                <label>Tanggal :</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" required value="<?= $ar->tanggal ?>">
                            </div>
                            <br>
                            <div class="from-group">
                                <label>Gambar :</label>
                                <img src="<?= base_url() . 'uploads/' . $ar->gambar ?>" width="100">
                                <input type="file" name="gambar" id="gambar" class="form-control" value="<?= base_url() . 'uploads/' .  $ar->gambar ?>">
                            </div>
                            <div class="from-group">
                                <label>Gambar2 :</label>
                                <img src="<?= base_url() . 'uploads/' . $ar->gambar2 ?>" width="100">
                                <input type="file" name="gambar2" id="gambar" class="form-control" value="<?= base_url() . 'uploads/' .  $ar->gambar ?>">
                            </div>
                            <div class="from-group">
                                <label>Gambar :</label>
                                <img src="<?= base_url() . 'uploads/' . $ar->gambar3 ?>" width="100">
                                <input type="file" name="gambar3" id="gambar" class="form-control" value="<?= base_url() . 'uploads/' .  $ar->gambar ?>">
                            </div>
                            <br>
                            <h6>jika gambar tidak ingin diubah tetap masukkan gambar yang sama kembali!</h6>


                            <br>
                            <button class="btn btn-secondary" type="submit" name="submit">Ubah Data</button>

                        </form>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>