    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container-fluid">
                <center>
                    <h1 class="h3 mb-2 text-gray-800">DAFTAR ARTIKEL</h1>
                </center>

                <?= $this->session->flashdata('flash') ?>

                <?php if (empty($artikel)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Tidak Ditemukan!
                    </div>
                <?php endif; ?>

                <button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambah_artikel"> <i class="fas fa-plus fa-sm"></i> Tambah Artikel</button>

                <table class="table table-bordered table-striped alert alert-dark table-responsive">

                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Artikel</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Nama Penulis</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                    <?php $nomor = 1; ?>
                    <?php foreach ($artikel as $ar) : ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td>
                                <img src="<?= base_url() . '/uploads/' . $ar->gambar ?>" width="100">
                            </td>
                            <td><?= $ar->judul; ?></td>
                            <td><?= substr($ar->artikel, 0, 300); ?></td>
                            <td><?= $ar->kategori; ?></td>
                            <td><?= $ar->nama_penulis; ?></td>
                            <td><?= $ar->tanggal; ?></td>

                            <td>
                                <?= anchor('admin/dashboard_admin/edit/' . $ar->id, '<div class="btn btn-primary btn-sm mb-3"><i class="fas fa-edit"></i></div>') ?>

                                <?= anchor('admin/dashboard_admin/hapus/' . $ar->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>', array('class' => 'delete', 'onclick' => "return confirmDialog();")) ?>


                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>

    </div>


    <!-- modal -->
    <div class="modal fade" id="tambah_artikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT ARTIKEL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/dashboard_admin/tambah' ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" name="judul" class="form-control" required placeholder="masukkan judul artikel">
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="artikel" class="form-control" cols="5" rows="20" required placeholder="masukkan artikel"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>News</option>
                            <option>Hot</option>
                            <option>Inet</option>
                            <option>Sport</option>
                            <option>Oto</option>
                            <option>Food</option>
                            <option>Health</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="text" name="nama_penulis" class="form-control" required placeholder="masukkan nama penulis">
                    </div>
                    <div class="form-group">
                        <input type="date" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="gambar" class="form-control" required placeholder="gambar">
                    </div>
                    <div class="form-group">
                        <input type="file" name="gambar2" class="form-control" placeholder="gambar2">
                    </div>
                    <div class="form-group">
                        <input type="file" name="gambar3" class="form-control" placeholder="gambar3">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>

        <script>
            function confirmDialog() {
                return confirm('Apakah anda yakin akan menghapus data artikel ini?')
            }
        </script>