<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Paket Makanan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Paket</th>
                        <th>Nama Paket</th>
                        <th>Harga Paket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datapaket as $p) : ?>
                        <tr>
                            <td><?= $p['id_paket']; ?></td>
                            <td><?= $p['namaPaket']; ?></td>
                            <td><?= "Rp. " . number_format($p['hargaPaket']); ?></td>
                            <td>
                                <a href="<?= site_url(); ?>manager/detailPaket/<?= $p['id_paket']; ?>" class="btn btn-primary btn-sm"><i class="far fa-eye"></i></a>
                                <a href="<?= site_url(); ?>manager/updatePaket/<?= $p['id_paket']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url(); ?>manager/hapusPaket/<?= $p['id_paket']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="d-grid text-right pt-3">
            <a href="<?php echo site_url('manager/tambahPaket'); ?>" class="btn btn-primary btn-md">Tambah Data Paket Makanan</a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    });
</script>