<style>
    input[type=submit] {
        width: 100%;
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>


<h1 style="text-align:center">Tambah Paket Makanan</h1>
<div class="container">
    <form action="<?php echo site_url('manager/proses_tambahpaket'); ?>" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id_paket">
        </div>
        <div class="form-group">
            <label>Nama Paket</label>
            <input type="text" class="form-control" name="namaPaket" placeholder="Masukan Nama Paket" required>
        </div>
        <div class="form-group">
            <label>Harga Paket</label>
            <input type="text" class="form-control" name="hargaPaket" placeholder="Masukan Harga Paket" required>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id_detPaket">
        </div>
        <div class="form-row">
            <div class="col-4">
                <label>Makanan yang Dipilih</label>
            </div>
            <div class="col">
                <label>Kuantitas</label>
            </div>
        </div>
        <div class="form-menu form-row mb-2">
            <div class="col-4">
                <select name="id_menu[]" id="id_menu" class="form-control">
                    <option selected>Pilih Makanan</option>
                    <?php foreach ($datamenu as $menu) : ?>
                        <option value="<?= $menu['id_menu']; ?>">[<?= $menu['id_menu']; ?>] - <?= $menu['namaMenu']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-1">
                <input type="text" name="kuantitas[]" class="form-control" required><br>
            </div>
            <div class="col">
                <a href="javascript:void(0)" class="add-form btn btn-warning font-weight-bold">Tambah</a>
                <!-- <button type="button" class="remove-form btn btn-danger">Remove<br> -->
            </div>
        </div>
        <div class="new-add-form"></div>
        <button type="submit" class="btn btn-success btn-lg btn-block pt-2 pb-2">Simpan</button>
    </form>
</div>

<script>
    $(document).ready(function() {

        $(document).on('click', '.remove-form', function() {
            $(this).closest('.form-menu').remove();
        });

        $(document).on('click', '.add-form', function() {
            $('.new-add-form').append(function() {
                var newElement = '<div class="form-menu form-row mb-2">';
                newElement += '<div class="col-4">';
                newElement += '<select name="id_menu[]" id="id_menu" class="form-control">';
                newElement += '<option selected>Pilih Makanan</option>';
                newElement += '<?php foreach ($datamenu as $menu) : ?>';
                newElement += '<option value="<?= $menu['id_menu']; ?>">[<?= $menu['id_menu']; ?>] - <?= $menu['namaMenu']; ?></option>';
                newElement += '<?php endforeach; ?>';
                newElement += '</select></div>';
                newElement += '<div class="col-1">';
                newElement += '<input type="text" name="kuantitas[]" class="form-control" required><br>';
                newElement += '</div>';
                newElement += '<div class="col">';
                newElement += '<button type="button" class="remove-form btn btn-danger">Remove<br>';
                newElement += '</div></div>';
                return newElement;
            });
        });

    });
</script>