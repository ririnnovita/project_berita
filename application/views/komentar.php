    <!-- Begin Page Content -->
    <div class="container-fluid">


        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container-fluid">
                <center>
                    <h1 class="h3 mb-2 text-gray-800">FORM KOMENTAR</h1>
                </center>


                <button class="btn btn-sm btn-secondary mb-3" data-toggle="modal" data-target="#tambah_komentar"> <i class="fas fa-plus fa-sm"></i> Tambah Komentar</button>

                <table class="table table-bordered table-striped alert alert-dark">

                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Isi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                    <?php $nomor = 1; ?>
                    <?php foreach ($komentar as $ar) : ?>
                        <tr>
                            <td class="text-center"><?= $nomor++ ?></td>
                            <td class="text-center"><?= $ar->nama; ?></td>
                            <td class="text-center"><?= $ar->isi; ?></td>
                            <td class="text-center">

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>

    </div>


    <!-- modal -->
    <div class="modal fade" id="tambah_komentar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM INPUT KOMENTAR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'komentar/tambah' ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label>Isi Komentar</label>
                            <textarea type="text" name="isi" class="form-control" cols="5" rows="10" required placeholder="Masukkan Isi Komentar Anda"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div