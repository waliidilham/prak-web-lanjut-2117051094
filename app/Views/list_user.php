
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
   

    <h3 class="mt-5" style="text-align:center;  padding-bottom:60px;">Tabel List User</h3>
    <a href="<?= base_url('user/create')?>" style="margin-left:300px; margin-bottom:20px; " class="btn btn-primary">Tambah data</a> 
    <div class="container">
    <div class="row">
   
    <table style="text-align:center;">
        <thead>
            <tr bgcolor="black" style="color:white; height:40px;;">
                <th width="20px">No</th>
                <th>ID User</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($users as $user){
            ?>
                <tr bgcolor=<?php
                    if($no%2==1){
                        echo"white";
                    }else{
                        echo "#dbd7d7";
                    }
                ?>>
                    <td style="width:50px; height:0px;"><?php echo $no++ ?></td>
                    <td align="center"><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>

                    <td >
                        <div class="wrap d-flex " style="margin-right:-150px;">
                        <a class="btn btn-primary" style="width: 80px; height: 40px; margin-right: 10px;" href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                            <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                            <form width="10px" action="<?=base_url('user/' . $user['id'])?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <input type="submit" class="btn btn-danger" value="Delete" style="width: 80px; height: 40px; margin-left:10px;">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
</table>
<?= $this->endSection()?>