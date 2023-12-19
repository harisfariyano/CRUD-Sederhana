<?php
// Sertakan file konfigurasi database
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data testimonial dari formulir atau sumber lainnya
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $foto = $_POST['foto'];
    $peringkat = $_POST['peringkat'];
    $teks_testimonial = $_POST['teks_testimonial'];

    // Simpan data testimonial ke database
    $query = "INSERT INTO testimonials (nama, jabatan, foto, peringkat, teks_testimonial) 
              VALUES ('$nama', '$jabatan', '$foto', $peringkat, '$teks_testimonial')";

    if ($conn->query($query) === TRUE) {
        echo "Data testimonial berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Menutup conn
$conn->close();
?>
