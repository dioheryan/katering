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


<h1 style="text-align:center">Ubah Paket Makanan</h1>
<div class="container">
    <form action="<?php echo site_url('manager/proses_ubahpaket'); ?>" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" name="id_paket" value="<?php echo $datadetail['id_paket'];?>">
    </div>
    <div class="form-group">
        <label>Nama Paket</label>
        <input type="text" class="form-control" name="namaPaket" value="<?php echo $datadetail['namaPaket'];?>">
    </div>
    <div class="form-group">
        <label>Harga Paket</label>
        <input type="text" class="form-control" name="hargaPaket" value="<?php echo $datadetail['hargaPaket'];?>">
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control" name="id_detPaket" value="<?php echo $datadetailp['id_detPaket'];?>">
    </div>
        <div class="form-row">
            <div class="col">
                <label>Makanan yang Dipilih</label>
            </div>
            <div class="col">
                <label>Kuantitas</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <select name="id_menu" id="id_menu" class="form-control">
                    <?php foreach ($datamenu as $menu) : ?>
                        <?php if ($menu['namaMenu'] == $datadetailp['namaMenu']) : ?>
                            <option value="<?= $menu['namaMenu']; ?>" Selected><?= $menu['namaMenu']; ?></option>
                        <?php else : ?>
                            <option value="<?= $menu['namaMenu']; ?>"><?= $menu['namaMenu']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <input type="text" name="kuantitas" class="form-control" value="<?php echo $datadetailp['kuantitas'];?>"><br>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block pt-2 pb-2">Simpan</button>
    </form>
</div>