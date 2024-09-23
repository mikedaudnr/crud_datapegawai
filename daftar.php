<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="bagian.css">
  
</head>

<body>

</body>

</html>
<section class="vh-100" style="background-color: #1E90FF;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <div class="container mt-5">
          <h3 class="text-white">Pendaftaran Pegawai Baru</h3>
          <form id="registerForm" action="proses_registrasi.php" method="post">

            <div class="card" style="border-radius: 15px;">
              <div class="card-body">

                <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Nama Lengkap</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" />

                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">NIK</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" id="nik" name="nik" class="form-control" placeholder="Masukkan NIK Anda" />

                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Jenis Kelamin</h6>

                  </div>
                  <div class="col-md-9 pe-5">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                      <option>Pilih Jenis Kelamin Anda</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Alamat</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <textarea type="text" id="alamat" name="alamat" class="form-control"
                      placeholder="Masukkan Alamat Lengkap"></textarea>

                  </div>
                </div>
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Nomor Telepon</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="text" id="no_tlp" name="no_tlp" class="form-control"
                      placeholder="Masukkan Nomor Aktif">

                  </div>
                </div>
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Jabatan</h6>

                  </div>
                  <div class="col-md-9 pe-5">
                    <select name="id_jabatan" class="form-control" required="">
                      <option>Pilih Jabatan Anda</option>
                      <?php
                      include "koneksi.php";
                      $qry_jabatan = mysqli_query($conn, "select * from tabel_jabatan");
                      while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                        echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row align-items-center py-3">
                  <div class="col-md-3 ps-5">

                    <h6 class="mb-0">Buat Password</h6>

                  </div>
                  <div class="col-md-9 pe-5">

                    <input type="password" id="password" name="password" class="form-control"
                      placeholder="Masukkan Password yang Kuat">

                  </div>

                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
                    </div>
                    <hr class="mx-n3">

                    <!-- <div class="col-md-3 text-right">
                      <button type="button" class="btn btn-secondary btn-lg" onclick="location.href='tampil_pegawai.php'">List
                        Pegawai</button>
                    </div> -->
                  </div>
                  <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Kirim
                    Formulir</button>
                    <div align="center">atau login jika sudah terdaftar</div>
                  
                  <button type="button" class="btn btn-secondary btn-lg"
                    onclick="location.href='index.php'">Login</button>
                </div>
              </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
              crossorigin="anonymous"></script>
        </div>
      </div>
    </div>
</section>