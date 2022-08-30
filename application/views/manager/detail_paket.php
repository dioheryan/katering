<div class="col mb-4 pr-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-dark">ID Paket : <?= $datapaket['id_paket']; ?></h5>
            <p class="card-text">Nama Paket : <?= $datapaket['namaPaket']; ?></p>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Paket</th>
                        <th>ID Menu</th>
                        <th>Nama Makanan</th>
                        <th>Kuantitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datadetailpaket as $dp) : ?>
                        <tr>
                            <td><?= $dp['id_paket']; ?></td>
                            <td><?= $dp['id_menu']; ?></td>
                            <td><?= $dp['namaMenu']; ?></td>
                            <td><?= $dp['kuantitas']; ?></td>
                            <td>
                                <a href="<?= site_url(); ?>manager/ubahPaket/<?= $dp['id_detPaket']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                                <a href="<?= site_url(); ?>manager/hapusPaket/<?= $dp['id_detPaket']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tableUser').DataTable();
    });
</script>