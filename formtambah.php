<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand">
                <h1>CRUD</h1>
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <form action="prosestambah.php" method="post">
        <div class="mb-3 row">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
            <input type="text" name="nrp" class="form-control" id="nrp" placeholder="Isikan NRP" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Isikan Nama" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
            <input type="text" name="jeniskelamin" class="form-control" id="jeniskelamin" placeholder="Isikan jenis kelamin" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Isikan Jurusan" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="email" placeholder="Isikan email" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Isikan ALamat" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
            <div class="col-sm-10">
            <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Isikan No HP" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="asalsma" class="col-sm-2 col-form-label">Asal SMA/SMK</label>
            <div class="col-sm-10">
            <input type="text" name="asalsma" class="form-control" id="asalsma" placeholder="Masukkan Asal SMA" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="matkulfav" class="col-sm-2 col-form-label">Matakuliah Favorit</label>
            <div class="col-sm-10">
            <input type="text" name="matkulfav" class="form-control" id="matkulfav" placeholder="Isikan Matakuliah Favorit" />
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary m-2">
          tambahkan
        </button>
        <a href="index.php" class="btn btn-danger">Batal</a>
        </form>  
    </div>
  </body>
</html>