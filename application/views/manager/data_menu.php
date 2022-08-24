<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Menu</th>
                        <th>Nama Menu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datamenu as $m) : ?>
                        <tr>
                            <td><?= $m['id_menu']; ?></td>
                            <td><?= $m['namaMenu']; ?></td>
                            <td>
                                <a href="<?= site_url(); ?>manager/updateMenu/<?= $m['id_menu']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url(); ?>manager/hapusMenu/<?= $m['id_menu']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="d-grid text-right pt-3">
                <a href="<?php echo site_url('manager/tambahMenu'); ?>" class="btn btn-primary btn-md">Tambah Data Menu</a>
            </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    });
</script>