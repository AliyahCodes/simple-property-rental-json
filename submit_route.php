<?php
// Menerima data dari form
$nama = $_POST["nama"];
$telepon = $_POST["telepon"];
$email = $_POST["email"];
$durasi_sewa = $_POST["durasi_sewa"];
$jenis_properti = $_POST["jenis_properti"];
$action = $_POST["action"];

if ($action == "pesan") {
    // Path ke file JSON untuk data sewa
    $file_path = 'data/data.json';

    // Membaca data dari file JSON jika ada
    if (file_exists($file_path)) {
        $json_data = file_get_contents($file_path);
        $data = json_decode($json_data, true) ?? [];
    } else {
        $data = [];
    }

    // Menambahkan data baru ke array
    $data[] = array(
        'nama' => $nama,
        'telepon' => $telepon,
        'email' => $email,
        'durasi_sewa' => $durasi_sewa,
        'jenis_properti' => $jenis_properti,
    );

    // Mengencode data menjadi JSON dan menyimpannya ke file
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file_path, $jsonfile);

    // Redirect ke halaman tabel setelah data disimpan
    header("Location: table.php");
    exit(); // Pastikan script berhenti setelah redirect
}
?>
