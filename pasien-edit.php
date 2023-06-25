<?php  
    require "component/head.php";
    require "component/navbar.php";
    require "include/conn.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM pasien WHERE ID_PASIEN = '$id' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 mt-5">
        <h2>Edit Pasien</h2>
        </div>
    </div>

    <form class="row g-3 mt-4" action="Pasien-edit-act.php" method="post">
  <div class="col-md-5 offset-sm-2">
    <label for="inputEmail4" class="form-label">NIK</label>
    <input type="text" class="form-control" id="inputEmail4" name="ID_PASIEN" value="<?=$row['ID_PASIEN'];?>" hidden>
    <input type="text" class="form-control" id="inputEmail4" name="nik" value="<?=$row['NIK'];?>">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputPassword4" name="nama" value="<?=$row['Nama'];?>" >
  </div>
  <div class="col-6 offset-sm-2">
    <label for="inputAddress" class="form-label">Tanggal Lahir</label>
    <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" value="<?=$row['Tanggal_Lahir'];?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <select id="inputState" class="form-select" name="jenkel" value="<?=$row['Jenis_Kelamin'];?>">
      <option selected>Perempuan</option>
      <option>Laki Laki</option>
    </select>
  </div>
  <div class="col-10 offset-sm-2">
    <label for="inputAddress2" class="form-label">Alamat</label>
    <input type="textarea" class="form-control" id="inputAddress2" name="alamat" value="<?=$row['Alamat'];?>">
  </div>
  <div class="col-md-6 offset-sm-2">
    <label for="inputCity" class="form-label">No Hp</label>
    <input type="text" class="form-control" id="inputCity" name="nohp" value="<?=$row['No_HP'];?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Golongan Darah</label>
    <select id="inputState" class="form-select" name="gol" value="<?=$row['Gol_Darah'];?>">
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
</div>