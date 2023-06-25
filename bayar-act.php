<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Data pembelian
$nama      =$_POST['nama'];
$pelayanan =$_POST['pelayanan'];
$total     =$_POST['total'];

// Tampilan struk pembayaran
echo "========= Struk Pembayaran ========= <br><br>"; 
echo "Nama Pasien     : " . $nama . "<br>";
echo "Jenis Pelayanan : " . $pelayanan . "<br><br>";
echo "------------------------------<br>";
echo "Total Harga: Rp" . number_format($total, 0, ',', '.') . "<br>";
echo "====================================<br>";
}
?>

<script>
		window.print();
        window.onafterprint = function() {
        window.location.href = 'pembayaran.php';
    };
	</script>