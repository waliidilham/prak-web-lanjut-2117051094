<?= $this->extend('layouts/app')?>

<?= $this->section('content') ?>
    <div class="container-sm" style="margin-top:100px;">
        <div class="card">
            <form  class="form-signin" action="<?=base_url('user/store')?>" method="post">
                <h2 class="card-header">Form Biodata Diri</h2>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td style="width:100px;" align="center"> :</td>
                            <td><input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
                            <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                                <div class="invalid-feedback">
                                    <?= session('validation')->getError('nama'); ?>
                                </div>
                            <?php endif; ?>
                            </td> 
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td style="width:100px;" align="center"> :</td>
                            <td><input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
                            <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                                <div class="invalid-feedback">
                                    <?= session('validation')->getError('npm'); ?>
                                </div>
                            <?php endif; ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Kelas</td>
                            <td style="width:100px;" align="center"> :</td>
                            <td>
                                <select name="kelas" id="kelas">
                                    <?php foreach($kelas as $item):?>
                                        <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                                    <?php endforeach;?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td style="width:100px;" align="center"> :</td>
                            <td><input type="text" name="jurusan"></td>
                        </tr>
                        <tr>
                            <td>========</td>
                            <td>=========</td>
                            <td>==================</td>
                        </tr>
                        
                        <tr>
                            <td> </td>
                            <td><input class="btn btn-success" type="submit" value="Simpan"></td>
                        </tr>
                        </table>
                </div>
            
            </form>
        </div>
    </div>
<?= $this->endSection() ?>