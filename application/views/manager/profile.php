<div class="card mb-3 ml-5" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=site_url('assets/img/profile/').$user['image'];?>" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['fullname']; ?> </h5>
        <p class="card-text"><?= $user['email']; ?></p>
        <p class="card-text"><small class="text-muted">ID Role : <?= $user['id_role']; ?></small></p>
      </div>
    </div>
  </div>
</div>