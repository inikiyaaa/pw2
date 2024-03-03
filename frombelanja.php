<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="process_form.php">
            <div class="form-group">
                <label for="customer">Customer:</label>
                <input type="text" class="form-control" id="customer" name="customer" required>
            </div>
            <div class="form-group">
                <label>Produk Pilihan:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" id="produk1" value="applewacth" data-harga="2.100.000" required>
                    <label class="form-check-label" for="produk1">applewacth- 2.100.000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" id="produk2" value="handphone" data-harga="2.500.000" required>
                    <label class="form-check-label" for="produk2">Handphone - 2.500.000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" id="produk3" value="Airpods" data-harga="1.750.000" required>
                    <label class="form-check-label" for="produk3">Airpods - 1.750.000</label>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Beli:</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>