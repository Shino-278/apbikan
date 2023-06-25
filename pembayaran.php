<?php  
    require "component/head.php";
    require "component/navbar.php";
?>

<div class="container">

    <div class="row">
        <div class="col-sm-8 offset-sm-2 mt-5 mb-3">
        <h2>Payment</h2>
        </div>
    </div>
    
    <form class="row g-3" action="bayar-act.php" method="post">
        <div class="col-md-6 offset-sm-2">
        <label for="inputCity" class="form-label"  >Nama</label>
        <input type="text" class="form-control" id="inputCity" name="nama">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label" >Jenis Pelayanan</label>
        <select id="inputState" class="form-select" name="pelayanan">
        <option selected>Silahkan Pilih</option>
        <option>Penyuluhan Kesehatan</option>
        <option>Konseling KB</option>
        <option>Persalinan</option>
        <option>Perawatan Nifas</option>
        <option>Perawatan Bayi</option>
        <option>Imunisasi</option>
        </select>
    </div>
    <div class="col-10 offset-sm-2">
        <label for="inputAddress2" class="form-label" >Total</label>
        <input type="text" class="form-control" id="inputAddress2" name="total">
    </div>
    </div>
    <div class="col-12 offset-sm-10 mt-3">
        <button type="submit" class="btn btn-primary">Bayar</button>
    </div>
    </form>
</div>