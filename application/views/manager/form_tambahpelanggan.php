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


<h1 style="text-align:center">Tambah Pelanggan</h1>
<div class="container">
    <form action="<?php echo site_url('manager/proses_tambahPelanggan'); ?>" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" name="id_pelanggan">
    </div>
    <div class="form-group">
        <label>Nama Pelanggan</label>
        <input type="text" class="form-control" name="namaPelanggan" placeholder="Masukan Nama Pelanggan" required>
    </div>
    <div class="form-group">
        <label>Alamat Pelanggan</label>
        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Pelanggan" required>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" class="form-control" name="noTelp" placeholder="Masukan Nomor Telepon Pelanggan" required>
    </div>
        <button type="submit" class="btn btn-success btn-lg btn-block pt-2 pb-2">Simpan</button>
    </form>
</div>