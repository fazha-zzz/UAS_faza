<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
    <center>
        <img src="images.png" alt="">
        <h2>penggajihan guru/karyawan Yayasan Assalam </h2>
    </center>
  </div>
<center>
    <form action="UAS_faza2.php" method="post">
  <div class="card text-start" style="width: 500px;">
  <div class="card-header">
    data penggajihan
  </div>
  <div class="card-body">
    <label>No</label>
    <input class="form-control" type="text" placeholder="no" aria-label="default input example" name="no">
    </div>
    <div class="card-body">
    <label>Nama</label>
    <input class="form-control" type="text" placeholder="nama" aria-label="default input example" name="nama">
    </div>
    <div class="card-body">
    <label>unit pendidikan</label>
    <select class="form-select" aria-label="Default select example" name="unit">
    <option selected>Pilih Unit Pendidikan</option>
  <option value="smk">smk</option>
  <option value="smp">smp</option>
  <option value="sd">sd</option>
  <option value="tk">tk</option>
</select>
    </div>


    <div class="card-body">
    <label>tanggal Gaji</label>
    <input class="form-control" type="date" placeholder="" aria-label="default input example" name="tanggal">
    </div>


    <div class="row">
    <div class="col">
  <h4 align="center">Gaji</h4>
  </div>
  <div class="col">
  <h4>Potongan</h4>
  </div>
  </div>

    <div class="row g-6">
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">jabatan</label>

  <select class="form-select" aria-label="Default select example" name="jabatan">
    <option selected>pilih jabatan</option>
  <option value="kepala sekolah">kepala sekolah</option>
  <option value="wakasek">wakasek</option>
  <option value="guru">guru</option>
  <option value="karyawan">karyawan</option>
</select>
  </div>
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">BPJS</label>
    <input type="text" class="form-control" placeholder="" aria-label="Last name" name="bpjs">
  </div>


  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">lama kerja</label>
    <input type="number" class="form-control" placeholder="lama kerja" aria-label="First name" name="lama_kerja">
  </div>
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">pinjaman</label>
    <input type="text" class="form-control" placeholder="pinjaman" aria-label="Last name" name="pinjaman">
  </div>


  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">status kerja</label>
  <select class="form-select" aria-label="Default select example" name="status">
    <option selected>pilih status kerja</option>
  <option value="Tetap">tetap</option>
  <option value="kontak">kontak</option>
  
</select>
  </div>
  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">cicilan</label>
    <input type="text" class="form-control" placeholder="tabungan" aria-label="Last name" name="tabungan">
  </div>

  <div class="col-md-6">
  
  </div>

  <div class="col-md-6">
  <label for="inputEmail4" class="form-label">infag</label>
    <input type="text" class="form-control" placeholder="lainnya" aria-label="Last name" name="lainnya">
  </div>

  <div class="col-md-12">
    <center><button type="submit" name="proses">proses</button></center>
  </div>

</div>

  <div class="card-footer text-muted">
    
  </div>
</div>
</form>
</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
