<?php
include('header.php');
//Mengambil data produk dari backend
include("backend/produk.php");
?>

<!-- Your HTML Code -->
<section id="pricing" class="pricing sections-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Belajar_CRUD 2023</h2>
    </div>

    <!-- Filter Buttons -->
    <div class="text-center" id="filter">
      <a class="filter-btn" href="index.php?filter=semua" data-filter="semua">Semua</a>
      <a class="filter-btn" href="index.php?filter=Paket1" data-filter="Paket1">30 hari</a>
      <a class="filter-btn" href="index.php?filter=Paket2" data-filter="Paket2">Mabar terus</a>
      <a class="filter-btn" href="index.php?filter=Paket3" data-filter="Paket3">Hemat</a>
    </div>


    <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
      <?php
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              // Ambil data dari database dan masukkan ke dalam template HTML
              $namaPaket = $row["nama_paket"];
              $harga = $row["harga"];
              $masaktiv = $row["masa_aktiv"];
              $kuota = $row["kuota"];
              $kecepatan = $row["kecepatan"];
              $deskripsi = $row["deskripsi"];
              ?>
              <div class="col-lg-4">
                <div class="pricing-item">
                  <h3><?php echo $namaPaket; ?></h3>
                  <h4><sup>Rp</sup><?php echo $harga; ?><span> / <?php echo $masaktiv; ?></span></h4>
                  <ul>
                    <li><i class="bi bi-globe"></i> <?php echo $kuota; ?></li>
                    <li><i class="bi bi-speedometer"></i> <?php echo $kecepatan; ?> Mbps</li>
                    <li><i class="bi bi-calendar2-check"></i> <span> <?php echo $masaktiv; ?></li>
                    <p><?php echo $deskripsi; ?></p>
                  </ul>
                  <div class="text-center"><a href="#" class="buy-btn">Beli Sekarang</a></div>
                </div>
              </div>
              <!-- End Pricing Item -->
          <?php
          }
      } else {
          echo "Tidak ada data paket internet.";
      }

      // Tutup koneksi setelah selesai
      $conn->close();
      ?>
    </div>
  </div>
</section>
<!-- End Pricing Section -->


<?php
include('footer.php');
?>