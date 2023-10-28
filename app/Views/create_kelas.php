<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<main class="container-sm">
  <form method="POST" action="<?= base_url('/kelas/store') ?>" enctype="multipart/form-data">
    <h1 class="h3 mt-5 mb-3 fw-normal">Create Class</h1>
    <div class="mb -3">
      <label for="floatingName" class="form-label">Nama Kelas</label>
      <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
      
      <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama_kelas'); ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
    <div class="mb -3">
     <label for="floatingKapasitas" class="form-label">Kapasitas</label>
      <input type="number" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingKapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= old('kapasitas') ?>">
      
      <?php if (session('validation') && session('validation')->hasError('kapasitas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('kapasitas'); ?>
        </div>
      <?php endif; ?>
    </div>
  
    <input type="submit" class="btn btn-primary" type="submit" value="Insert" style="margin-top:20px; margin-left:10px;">
  </form>
</main>
<?= $this->endSection('content') ?>