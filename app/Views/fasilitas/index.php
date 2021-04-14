<?= $this->extend('templates/main'); ?>

<?= $this->section('content'); ?>
<section id="fasilitas" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title mt-5">
            <h2>Fasilitas</h2>
        </div>
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300"">
        <div class=" portfolio-wrap">
                <figure>
                    <img src="assets/img/fasilitas/gedung.jpg" class="img-fluid" alt="">
                </figure>
                <div class="portfolio-links text-center">
                    <a href="assets/img/fasilitas/gedung.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ruang Kuliah PTIK"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
            <div class="portfolio-wrap">
                <figure>
                    <img src="assets/img/fasilitas/labkom.jpg" class="img-fluid" alt="">
                </figure>
                <div class="portfolio-links text-center">
                    <a href="assets/img/fasilitas/labkom.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Laboratorium Komputer PTIK"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
            <div class="portfolio-wrap">
                <figure>
                    <img src="assets/img/fasilitas/perpus.jpg" class="img-fluid" alt="">
                </figure>
                <div class="portfolio-links text-center">
                    <a href="assets/img/fasilitas/perpus.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Perpustakaan JPTK FKIP UNS"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-aos="zoom-in" data-aos-delay="300">
            <div class="portfolio-wrap">
                <figure>
                    <img src="assets/img/fasilitas/studio.jpg" class="img-fluid" alt="">
                </figure>
                <div class="portfolio-links text-center">
                    <a href="assets/img/fasilitas/studio.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Studio PTIK"><i class="bx bx-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>