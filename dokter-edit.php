<?php  
    require "component/head.php";
    require "component/navbar.php";
    require "include/conn.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM dokter WHERE id_dokter = '$id' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 mt-5">
        <h2>Edit Pasien</h2>
        </div>
    </div>

    <form class="row g-3 mt-4" action="dokter-edit-act.php" method="post">
  <div class="col-md-5 offset-sm-2">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputEmail4" name="id_dokter" value="<?=$row['id_dokter'];?>" hidden>
    <input type="text" class="form-control" id="inputPassword4" name="nama" value="<?=$row['nama'];?>" >
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">NIP</label>
    <input type="text" class="form-control" id="inputPassword4" name="nip" value="<?=$row['NIP'];?>" >
  </div>
  <div class="col-md-5 offset-sm-2">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <select id="inputState" class="form-select" name="jenkel" value="<?=$row['jnis_kelamin'];?>">
      <option selected>Perempuan</option>
      <option>Laki Laki</option>
    </select>
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">No Hp</label>
    <input type="text" class="form-control" id="inputCity" name="nohp" value="<?=$row['no_hp'];?>">
  </div>
  <div class="col-md-6 offset-sm-2">Jadwal Praktik</label>
    <input type="text" class="form-control" id="inputCity" name="jadwal" value="<?=$row['jadwal_praktik'];?>">
  </div>
 
  
  <div class="col-12 offset-sm-2">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
</div>
</div>