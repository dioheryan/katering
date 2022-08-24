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


<h1 style="text-align:center">Update Pegawai</h1>
<div class="container">
<form action="<?php echo site_url('manager/proses_updatePegawai/'.$datapegawai['id_pegawai']); ?>" method="post">

    <div class="form-group">
        <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $datapegawai['id_pegawai'];?>">
    </div>
    <div class="form-group">
        <label>Nama Pegawai</label>
        <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $datapegawai['nama_pegawai']; ?>">
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" class="form-control" name="no_telp" value="<?php echo $datapegawai['no_telp']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $datapegawai['alamat']; ?>">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
            <?php foreach ($jeniskelamin as $jk) : ?>
                <?php if ($jk == $datapegawai['jenis_kelamin']) : ?>
                    <option value="<?= $jk; ?>" Selected><?= $jk; ?></option>
                <?php else : ?>
                    <option value="<?= $jk; ?>"><?= $jk; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit" value="Simpan">
</form>
    </div>
    