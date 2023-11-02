<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</style>
</head>
<body>
  <main class="form-signin w-100 m-auto">
   <div class="container-sm">
   <form method="POST" action="<?=base_url('/user/store')?>">
      <h1 class="h3 mt-5 mb-3 fw-normal text-center">Sign Up</h1>

      <div class="form-floating">
        <input type="text" class="form-control mt-2" id="floatingName" placeholder="Nama" name="nama">
        <label for="floatingName">Nama</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control mt-2" id="floatingNpm" placeholder="NPM" name="npm">
        <label for="floatingNpm">NPM</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control mt-2" id="floatingKelas" placeholder="Kelas" name="kelas">
        <label for="floatingKelas">Kelas</label>
      </div>
      <button class="btn btn-success sd-grid gap-2 col-6 mx-auto" type="submit">Insert it</button>
    </form>
   </div>
  </main>
</body>
</html>