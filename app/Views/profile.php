<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gilang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    h2 {
      text-align: center;
    }
  </style>
</head> -->

<!-- <body> -->
    <!-- <p>Nama: Waliid Ilham Ramadhan</p>
    <p>Kelas: CD</p>
    <p>NPM: 2117051094</p> 
    <P>Alamat : Kost Lanang w</P>-->
    <?= $this->extend('layouts/app')?>
    <?= $this->section('content')?>


<div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">

  <div class="border border-5 rounded" style="padding: 20px;">
      <h2><center>Biodata Diri</center></h2>
    <img src="<?= $user['foto']?>" class="rounded-circle mx-auto d-block py-3" alt="Generic placeholder image" width="160" height="190">
  <table class="mx-auto">
    <tr>
      <td>
        <button class="btn btn-success" type="button" style="width: 320px"><?= $user['nama']?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button type="button" class="btn btn-success" style="width: 320px"><?= $user['npm'] ?></button>
      </td>
    </tr>
    <tr>
      <td>
      <button type="button" class="btn btn-success" style="width: 320px"><?= $user['nama_kelas'] ?></button>
      </td>
    </tr>
  </table>

  <?=$this->endSection()?>
