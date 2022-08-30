<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($datapelanggan as $p) : ?>
                        <tr>
                            <td><?= $p['namaPelanggan']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['noTelp']; ?></td>
                            <td>
                                <a href="<?= site_url(); ?>manager/updatePelanggan/<?= $p['id_pelanggan']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url(); ?>manager/hapusPelanggan/<?= $p['id_pelanggan']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>   
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            <div class="d-grid text-right pt-3">
                <a href="<?php echo site_url('manager/tambahPelanggan'); ?>" class="btn btn-primary btn-md">Tambah Data Pelanggan</a>
            </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    });
</script>