<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <div class="container-fluid">
            <?= $this->session->flashdata('flash') ?>

            <h4><i class="fas fa-plus fa-sm"></i> TAMBAH KATEGORI</h4>


            <div class="card sahdow mb-3">
                <div class="card-body alert alert-dark">

                    <form action="<?= base_url() . 'admin/tambah_kategori/tambah_kategori' ?>" method="POST">

                        <div class="card-body">

                            <div class="form-group">
                                <input type="text" name="kategori" placeholder="Masukkan Nama Kategori" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="alias" placeholder="Masukkan Nama Alias" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="link" placeholder="Masukkan Link" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="logo" placeholder="Masukkan Logo" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <select name="terbit">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container-fluid">

                <h3><i class="fas fa-list fa-sm"></i> LIST</h3>

                <table class="table table-bordered table-striped alert alert-dark">

                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Kategori</th>
                        <th class="text-center">Alias</th>
                        <th class="text-center">Logo</th>
                        <th class="text-center">Link</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                    <?php $nomor = 1; ?>
                    <?php foreach ($kategori as $ka) : ?>
                        <tr>
                            <td class="text-center"><?= $nomor++ ?></td>
                            <td class="text-center"><?= $ka['kategori']; ?></td>
                            <td class="text-center"><?= $ka['alias']; ?></td>
                            <td class="text-center"><?= $ka['logo']; ?></td>
                            <td class="text-center"><?= $ka['link']; ?></td>
                            <td class="text-center">
                                <?= anchor('admin/tambah_kategori/edit/' . $ka['id'], '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>

                                <?= anchor('admin/tambah_kategori/hapus/' . $ka['id'], '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>

    </div>
</div>