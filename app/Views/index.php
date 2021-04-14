<?= $this->extend('templates/main'); ?>

<?= $this->section('content'); ?>
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Selamat Datang di PTIK FKIP UNS</h1>
        <h2>Pendidikan Teknik Informatika dan Komputer FKIP UNS</h2>
      </div>
    </div>
    <div class="text-center">
      <a href="#about" class="btn-get-started scrollto">Baca Selengkapnya</a>
    </div>
    <div class="row icon-boxes">
      <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="ri-trophy-line"></i></div>
          <h4 class="title"><a href="">Akreditasi</a></h4>
          <p class="description">Program Studi Pendidikan Teknik Informatika dan Komputer UNS telah terakreditasi dengan peringkat A.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="ri-building-4-line"></i></div>
          <h4 class="title"><a href="">Fasilitas</a></h4>
          <p class="description">Progam Studi S-1 Pendidikan Teknik Informatika dan Komputer FKIP UNS menempati gedung yang cukup luas, representative dan strategis di lingkungan FKIP UNS.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="ri-user-follow-line"></i></div>
          <h4 class="title"><a href="">Jalur Penerimaan</a></h4>
          <p class="description">Sistem penerimaan mahasiswa baru di Program Studi Pendidikan Teknik Informatika dan Komputer FKIP UNS hanya membuka 1 jalur yaitu sistem SPMB UNS.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="about">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>TENTANG KAMI</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
        <img src="<?= base_url(); ?>/assets/img/ptik.png" class="img-fluid" alt="Logo PTIK">
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
        <img src="<?= base_url(); ?>/assets/img/uns-besar.png" class="img-fluid" alt="Logo UNS Besar">
      </div>
      <div class="col-lg-6 mt-3">
        <a href="https://youtu.be/ijdrsNmd1YE" target="_blank"><img src="<?= base_url(); ?>/assets/img/video/1.jpg" class="img-fluid" alt="Video Profil PTIK"></a>
      </div>
      <!-- <div class="col-lg-6">
        <a href="https://youtu.be/gBPvt_mCTAQ" target="_blank"><img src="<?= base_url(); ?>/assets/img/video/2.jpg" class="img-fluid" alt=""></a>
      </div> -->
    </div>
  </div>
</section>

<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>KABAR PTIK TERKINI</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <img class="img-fluid" src="<?= base_url(); ?>/assets/img/kabar/1.jpg" alt="">
          <h4>Video Profil PTIK 2021</h4>
          <p>Berpendidikan, berkarakter dan berkompetisi menjadi unggul</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <img class="img-fluid" src="<?= base_url(); ?>/assets/img/kabar/2.jpg" alt="">
          <h4>Pengabdian Masyarakat</h4>
          <p>Pengabdian Masyarakat di Desa Kemuning bersama Permikomnas</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <img class="img-fluid" src="<?= base_url(); ?>/assets/img/kabar/3.jpg" alt="">
          <h4>Reorganisasi HMP MIKROPTIK Periode 2020/2021</h4>
          <p>Reorganisasi HMP MIKROPTIK Pertama dilakukan secara daring</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>PTIK JUARA</h2>
    </div>
    <div class="row portfolio-container">
      <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
        <figure>
          <img src="<?= base_url(); ?>/assets/img/juara/2.jpg" class="img-fluid" alt="">
        </figure>
        <div class="portfolio-links text-center">
          <a href="<?= base_url(); ?>/assets/img/juara/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mahasiswa PTIK Sabet Medali Perunggu di Jepang"><i class="bx bx-plus"></i></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
      <div class="portfolio-wrap">
        <figure>
          <img src="<?= base_url(); ?>/assets/img/juara/3.jpg" class="img-fluid" alt="">
        </figure>
        <div class="portfolio-links text-center">
          <a href="<?= base_url(); ?>/assets/img/juara/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mahasiswa PTIK UNS Mendapatkan Bronze Medal dan Special Award dari King Abdulaziz University"><i class="bx bx-plus"></i></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
      <div class="portfolio-wrap">
        <figure>
          <img src="<?= base_url(); ?>/assets/img/juara/4.jpg" class="img-fluid" alt="">
        </figure>
        <div class="portfolio-links text-center">
          <a href="<?= base_url(); ?>/assets/img/juara/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="HMP PTIK juara Lomba Futsal"><i class="bx bx-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section id="profilDosen" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Dosen S1 - PTIK</h2>
    </div>
    <div class="row portfolio-container">
      <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
        <figure>
          <img src="<?= base_url(); ?>/assets/img/dosen/cucuk.jpg" class="img-fluid" alt="">
        </figure>
        <div class="portfolio-links text-center">
          <a href="<?= base_url(); ?>/assets/img/dosen/cucuk.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Cucuk Wawan Budiyanto, S.T., Ph.D."><i class="bx bx-plus"></i></a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
      <figure>
        <img src="<?= base_url(); ?>/assets/img/dosen/hatta.jpg" class="img-fluid" alt="">
      </figure>
      <div class="portfolio-links text-center">
        <a href="<?= base_url(); ?>/assets/img/dosen/hatta.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Puspanda Hatta, S.Kom., M.Eng."><i class="bx bx-plus"></i></a>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/nurcahya.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/nurcahya.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Nurcahya Pradana Taufik Prakisya, S.Kom., M.Cs."><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/febri.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/febri.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Febri Liantoni, S.ST., M.Kom"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/aris.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/aris.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Aris Budianto, ST. M.Eng"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/basori.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/basori.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Basori, M.Pd"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/rosihan.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/rosihan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rosihan Ari Yuana, S. Si, M. Kom"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/dwi.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/dwi.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dwi Maryono, S.Si., M.Kom"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/agus-efendi.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/agus-efendi.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dr.Agus Efendi, M.Pd"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/yudianto.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/yudianto.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Yudianto Sujana, S. Kom., M.Kom"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/endar.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/endar.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Endar Suprih Wihidayat, S.T.,M.Eng"><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
    <figure>
      <img src="<?= base_url(); ?>/assets/img/dosen/yusfia.jpg" class="img-fluid" alt="">
    </figure>
    <div class="portfolio-links text-center">
      <a href="<?= base_url(); ?>/assets/img/dosen/yusfia.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Yusfia Hafid Aristyagama, S.T.,M.T."><i class="bx bx-plus"></i></a>
    </div>
  </div>
  </div>

  </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Lokasi</h2>
      <p>Jl. A. Yani No.200, Dusun II, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57161</p>
    </div>
    <div>
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1457474647636!2d110.77123821415174!3d-7.559083076740738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14450edd210d%3A0xa6ea1f9494841e84!2sFKIP%20JPTK%20UNS%20Kampus%20V!5e0!3m2!1sen!2sid!4v1617362614028!5m2!1sen!2sid" frameborder="0" allowfullscreen=""></iframe>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>