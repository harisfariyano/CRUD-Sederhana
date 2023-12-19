    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>"Dengarkan Pengalaman Positif dari Pengguna Setia Kami! Apa yang Mereka Katakan tentang Cleon."</p>
                </div>
                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                    <?php
                        if ($result_testimonials->num_rows > 0) {
                            while ($row = $result_testimonials->fetch_assoc()) {
                                echo "<div class='swiper-slide'>";
                                echo "<div class='testimonial-wrap'>";
                                echo "<div class='testimonial-item'>";
                                echo "<div class='d-flex align-items-center'>";
                                #echo "<img src='" . $row['foto'] . "' class='testimonial-img flex-shrink-0' alt=''>";
                                echo "<div>";
                                echo "<h3>" . $row['nama'] . "</h3>";
                                echo "<h4>" . $row['jabatan'] . "</h4>";
                                echo "<div class='stars'>";
                                for ($i = 0; $i < $row['peringkat']; $i++) {
                                    echo "<i class='bi bi-star-fill'></i>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<p>";
                                echo "<i class='bi bi-quote quote-icon-left'></i>";
                                echo $row['teks_testimonial'];
                                echo "<i class='bi bi-quote quote-icon-right'></i>";
                                echo "</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "Tidak ada testimonial yang tersedia.";
                        }

                        // Tutup koneksi setelah selesai
                        $conn->close();
                        ?>
                        
                    </div>
                </div>
                <div class="swiper-pagination"></div>
        </section-->