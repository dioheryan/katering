<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($datapegawai as $p) : ?>
                        <tr>
                            <td><?= $p['nama_pegawai']; ?></td>
                            <td><?= $p['no_telp']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['jenis_kelamin']; ?></td>
                            <td>
                                <a href="<?= site_url(); ?>manager/updatePegawai/<?= $p['id_pegawai']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url(); ?>manager/hapusPegawai/<?= $p['id_pegawai']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>   
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            <div class="d-grid text-right pt-3">
                <a href="<?php echo site_url('manager/tambahPegawai'); ?>" class="btn btn-primary btn-md">Tambah Data Pegawai</a>
            </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    });
</script>