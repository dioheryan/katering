<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Gambar</th>
                        <th>ID Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datauser as $u) : ?>
                        <tr>
                            <td><?= $u['fullname']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['image']; ?></td>
                            <td><?= $u['id_role']; ?></td>
                            <td>
                                <a href="<?= site_url(); ?>admin/updateUser/<?= $u['id_user']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url(); ?>admin/hapusUser/<?= $u['id_user']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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