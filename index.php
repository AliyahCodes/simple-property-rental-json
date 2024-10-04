<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Properti</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="library/css/style.css">
</head>
<body>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4"><b>Form Pemesanan Properti</b></h2>
        <div class="row form-container">
            <div class="col-md-6 form-image">
                <img src="images/logo.jpg" alt="3D Image" style="width:100%;">
            </div>
            <div class="col-md-6 form-content">
                <form action="submit_route.php" method="POST" id="form-pemesanan">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">No Telepon:</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="durasi_sewa">Durasi Sewa:</label>
                        <input type="number" class="form-control" id="durasi_sewa" name="durasi_sewa" placeholder="Durasi Sewa (hari)" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_properti">Jenis Properti:</label>
                        <select class="form-control" id="jenis_properti" name="jenis_properti" required>
                            <option value="Kamar">Kamar</option>
                            <option value="Pavilion">Pavilion</option>
                            <option value="Rumah">Rumah</option>
                            <option value="Kios">Kios</option>
                            <option value="Ruko">Ruko</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="action" value="pesan">Pesan</button>
                    <button type="button" class="btn btn-secondary btn-block" onclick="hitungTotal()">Hitung</button>
                </form>
                <div id="totalHarga" class="mt-3" style="display:none;">
                    <h4>Nama: <span id="displayNama"></span></h4>
                    <h4>Telepon: <span id="displayTelepon"></span></h4>
                    <h4>Email: <span id="displayEmail"></span></h4>
                    <h4>Durasi Sewa: <span id="displayDurasiSewa"></span> hari</h4>
                    <h4>Jenis Properti: <span id="displayJenisProperti"></span></h4>
                    <h4>Total Harga Sewa: <span id="hargaSewa"></span></h4>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
       function hitungTotal() {
            var durasiSewa = document.getElementById('durasi_sewa').value; 
            var jenisProperti = document.getElementById('jenis_properti').value; 
            var perhari = 0;

            switch(jenisProperti) {
                case 'Kamar':
                    perhari = 500000;
                    break;
                case 'Pavilion':
                    perhari = 1000000;
                    break;
                case 'Rumah':
                    perhari = 2000000;
                    break;
                case 'Kios':
                    perhari = 1500000;
                    break;
                case 'Ruko':
                    perhari = 2500000;
                    break;
            }

            var totalHarga = durasiSewa * perhari; 
            document.getElementById('hargaSewa').innerText = 'Rp ' + totalHarga.toLocaleString();
            document.getElementById('totalHarga').style.display = 'block';

            // Display input data
            document.getElementById('displayNama').innerText = document.getElementById('nama').value;
            document.getElementById('displayTelepon').innerText = document.getElementById('telepon').value;
            document.getElementById('displayEmail').innerText = document.getElementById('email').value;
            document.getElementById('displayDurasiSewa').innerText = durasiSewa;
            document.getElementById('displayJenisProperti').innerText = jenisProperti;
        }

    </script>
</body>
</html>
