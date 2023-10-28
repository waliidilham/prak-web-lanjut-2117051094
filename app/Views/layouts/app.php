<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>woke</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<header>

    <div class="menu">
        <ul class="">
            
            
            <li class="menu-item hidden"><a href="<?= base_url('/')?>">Home</a></li>
            <li class="menu-item hidden"><a href="<?= base_url('/user')?>">List User</a>
            </li>
            <li class="menu-item hidden"><a href="<?= base_url('/kelas')?>">List Kelas</a></li>
            
        </ul>
    </div>


</header>
<body>
    <?= $this->renderSection('content')?>
</body>
</html>    