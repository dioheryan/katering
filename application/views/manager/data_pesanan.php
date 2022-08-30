<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id Pesanan</th>
                        <th>Lorem Ipsum</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($pesanan as $p) : ?>
                        <tr>
                            <td><?= $p['id_pesanan']; ?></td>
                          
                            <td>
                                <a href="<?= site_url(); ?>manager/updatePesanan/<?= $p['id_pesanan']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url(); ?>manager/hapusPesanan/<?= $p['id_pesanan']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>   
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            <div class="d-grid text-right pt-3">
                <a href="<?php echo site_url('manager/tambahPesanan'); ?>" class="btn btn-primary btn-md">Tambah Data Pesanan</a>
            </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    });
</script>