<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<main class="form-signin w-1 m-auto" style=" padding-top:10px;">
  <form style="margin-left:25px;" class="row g-3" method="POST" action="<?= base_url('/user/store') ?>" enctype="multipart/form-data">
    <h1 class="h3 mt-5 mb-3 fw-normal text-center">Let's sign up</h1>
    <div class="row mb-3">
    <label class="col-sm-1 col-form-label" for="gridCheck">Foto</label>
    <div class="col-sm-10">
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
    </div>
    
    </div>
    <div class="row mb-3">
        <label  class="col-sm-1 col-form-label" for="gridCheck">Nama</label>
      <div class="col-sm-10">
         <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
      </div>
      <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama'); ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-1 col-form-label" for="gridCheck">NPM</label>

        <div class="col-sm-10">
            <input type="number" class="form-control mt-1 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
      </div>
      <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('npm'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="row mb-3">
      <select class="form-select mt-2" aria-label="Default select example" name="kelas">
        <option value="" selected disabled>Pilih Kelas</option>
        <?php
        foreach ($kelas as $item) {
        ?>
          <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
        <?php } ?>
      </select>
    </div>
    


    
     <input type="submit" class="btn btn-primary" value="Sign I n">
  </form>
</main>
<?= $this->endSection('content') ?>