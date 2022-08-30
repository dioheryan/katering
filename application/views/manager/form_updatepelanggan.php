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


<h1 style="text-align:center">Update Pelanggan</h1>
<div class="container">
<form action="<?php echo site_url('manager/proses_updatePelanggan/'.$pelanggan['id_pelanggan']); ?>" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" name="id_pelanggan" value="<?php echo $pelanggan['id_pelanggan'];?>">
    </div>
    <div class="form-group">
        <label>Nama Pelanggan</label>
        <input type="text" class="form-control" name="namaPelanggan" value="<?php echo $pelanggan['namaPelanggan'];?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $pelanggan['alamat'];?>">
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" class="form-control" name="noTelp" value="<?php echo $pelanggan['noTelp'];?>">
    </div>
    <button type="submit" class="btn btn-success btn-lg btn-block pt-2 pb-2">Simpan</button>
</form>
</div>
    