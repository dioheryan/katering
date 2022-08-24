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


<h1 style="text-align:center">Update User</h1>
<div class="container">
<form action="<?php echo site_url('admin/proses_updateUser/'.$user['id_user']); ?>" method="post">

    <div class="form-group">
        <input type="hidden" class="form-control" name="id_user" value="<?php echo $user['id_user'];?>">
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="fullname" value="<?php echo $user['fullname']; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $user['email']; ?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="password" value="<?php echo $user['password']; ?>">
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="image" value="<?php echo $user['image']; ?>">
    </div>
    <div class="form-group">
        <label>ID Role</label>
        <select class="form-control" name="id_role">
            <?php foreach ($role as $r) : ?>
                <?php if ($r == $user['id_Role']) : ?>
                    <option value="<?= $r; ?>" Selected><?= $r; ?></option>
                <?php else : ?>
                    <option value="<?= $r; ?>"><?= $r; ?></option><br>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="submit" value="Simpan">
</form>
    </div>
    