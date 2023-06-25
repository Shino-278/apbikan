<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .items {
            width: 100%;
            border-collapse: collapse;
        }

        .items th,
        .items td {
            padding: 10px;
            text-align: left;
        }

        .items th {
            background-color: #ddd;
        }

        .total {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Struk Pembayaran</h1>
            <p>Bidan Delima</p>
        </div>

        <div class="invoice-details">
            <p>Nomor Invoice : 12345</p>
            <p>Tanggal : <?php echo date('d/m/Y'); ?></p>
        </div>

        <table class="items">
            <thead>
                <tr>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produk A</td>
                    <td>2</td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Produk B</td>
                    <td>1</td>
                    <td>$20</td>
                </tr>
                <tr>
                    <td>Produk C</td>
                    <td>3</td>
                    <td>$15</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <p>Total: $75</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
