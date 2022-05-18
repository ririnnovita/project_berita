<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <div class="container-fluid">

            <h1 class="h3 mb-2 text-gray-800 fas fa-edit"> UBAH KATEGORI</h1>

            <div class="card sahdow mb-4">
                <div class="card-body alert alert-dark">

                    <?php foreach ($kategori as $ka) : ?>
                        <form action="<?= base_url() . 'admin/tambah_kategori/update' ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $ka->id ?>">
                            <div class="from-group">
                                <label>Nama Kategori :</label>
                                <input type="text" name="kategori" id="kategori" class="form-control" required value="<?= $ka->kategori ?>">
                            </div><br>
                            <div class="from-group">
                                <label>Alias :</label>
                                <input type="text" name="alias" id="alias" class="form-control" required value="<?= $ka->alias ?>">
                            </div>
                            <div class="from-group">
                                <label>Link :</label>
                                <input type="text" name="link" id="link" class="form-control" required value="<?= $ka->link ?>">
                            </div>
                            <div class="from-group">
                                <label>Logo :</label>
                                <input type="text" name="logo" id="logo" class="form-control" required value="<?= $ka->logo ?>">
                            </div>
                            <br>
                            <button class="btn btn-secondary" type="submit" name="submit">Ubah Data</button>

                        </form>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>