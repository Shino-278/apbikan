<?php 
    require "component/head.php";
    require "component/navbar.php";
?>

<!-- Form -->

<div class="container">

    <div class="row">
    <div class="col-sm-8 offset-sm-2 mt-5">
      <h2>Form Pendaftaran</h2>
    </div>
    </div>
    
<form class="row g-3 mt-4" action="daftar-act.php" method="post">
  <div class="col-md-5 offset-sm-2">
    <label for="inputEmail4" class="form-label">NIK</label>
    <input type="text" class="form-control" id="inputEmail4" name="nik" required>
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputPassword4" name="nama" required>
  </div>
  <div class="col-6 offset-sm-2">
    <label for="inputAddress" class="form-label">Tanggal Lahir</label>
    <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" readonly required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <select id="inputState" class="form-select" name="jenkel">
      <option selected>Perempuan</option>
      <option>Laki Laki</option>
    </select>
  </div>
  <div class="col-10 offset-sm-2">
    <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="textarea" class="form-control" id="inputAddress2" name="alamat" required>
  </div>
  <div class="col-md-6 offset-sm-2">
    <label for="inputCity" class="form-label">No Hp</label>
    <input type="text" class="form-control" id="inputCity" name="nohp" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Golongan Darah</label>
    <select id="inputState" class="form-select" name="gol">
      <option selected>A</option>
      <option>O</option>
      <option>B</option>
      <option>AB</option>
    </select>
  </div>
  
  <div class="col-12 offset-sm-2">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
</div>

<!-- End Form -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    // Inisialisasi Datepicker pada input dengan class "datepicker"
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd', // Format tanggal yang diinginkan
        autoclose: true, // Menutup datepicker setelah memilih tanggal
      });
    });
  </script>