<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sewa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../library/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4"><b>Daftar Sewa</b></h2>
        <table class="table table-bordered table-striped table-blue">
            <thead class="thead-blue">
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Durasi Sewa</th>
                    <th>Jenis Properti</th>
                </tr>
            </thead>
            <tbody>

            <?php
                // Mendefinisikan path file JSON untuk data sewa
                $file = 'data/data.json';
                // Memeriksa apakah file JSON ada
                if (file_exists($file)) {
                    // Membaca konten file JSON untuk data sewa
                    $json_data = file_get_contents($file);
                    // Json decode mengubah string JSON menjadi array assosiatif pho
                    $data = json_decode($json_data, true);

                    // Memeriksa apakah data sewa tidak kosong
                    if (!empty($data)) {
                        // Mengurutkan data sewa berdasarkan nama pr secara abjad
                       
                        // Loop melalui setiap data sewa
                        // Foreach meng loop setiap sewa penerbangan dalam table html dari variabel hasils as hasil
                        foreach ($data as $d) {

                            // Tampilkan data sewa dalam tabel
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($d['nama']) . "</td>";
                            echo "<td>" . htmlspecialchars($d['telepon']) . "</td>";
                            echo "<td>" . htmlspecialchars($d['email']) . "</td>";
                            echo "<td>" . htmlspecialchars($d['durasi_sewa']) . "</td>";
                            echo "<td>" . htmlspecialchars($d['jenis_properti']) . "</td>";
                            
                            echo "</tr>";
                        }
                    } else {
                        // Menampilkan pesan jika tidak ada data yang tersedia
                        echo "<tr><td colspan='6'>No data available</td></tr>";
                    }
                }
                ?>
                  
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
