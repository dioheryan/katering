<style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

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


<h1 style="text-align:center">Update Menu</h1>
<div class="container">
<form action="<?php echo site_url('manager/proses_updateMenu/'.$datamenu['id_menu']); ?>" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" name="id_menu" value="<?php echo $datamenu['id_menu'];?>">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="id_kategori" id="id_kategori" class="form-control">
            <option selected>Pilih Kategori</option>
            <?php foreach ($kategori as $k) : ?>
                <?php if ($k["id_kategori"] == $datamenu['id_kategori']) : ?>
                    <option value="<?= $k["id_kategori"]; ?>" Selected><?= $k["namaKategori"]; ?></option>
                <?php else : ?>
                    <option value="<?= $k["id_kategori"]; ?>"><?= $k["namaKategori"]; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Nama Menu</label>
        <input type="text" class="form-control" name="namaMenu" value="<?php echo $datamenu['namaMenu'];?>">
    </div>
    <div class="form-group">
        <label>Dekripsi Menu</label>
        <input type="text" class="form-control" name="deskripsi" value="<?php echo $datamenu['deskripsi'];?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" name="harga" value="<?php echo $datamenu['harga'];?>">
    </div>
    <button type="submit" class="btn btn-success btn-lg btn-block pt-2 pb-2">Simpan</button>
</form>
</div>
    