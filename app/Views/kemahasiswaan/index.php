<?= $this->extend('templates/main'); ?>

<?= $this->section('content'); ?>
<section id="hmp">
    <div class="container">
        <div class="section-title mt-5" data-aos="zoom-in" data-aos-delay="100">
            <h2>HMP MIKROPTIK</h2>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="300">
            <div class="col-lg-4">
                <img src="<?= base_url(); ?>/assets/img/hmp/1.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-4">
                <img src="<?= base_url(); ?>/assets/img/hmp/2.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-4">
                <img src="<?= base_url(); ?>/assets/img/hmp/3.jpg" class="img-thumbnail" alt="...">
            </div>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="text-center mt-5">
                <a href="https://www.instagram.com/mikroptik_uns/" class="btn btn-primary"><i class="ri-instagram-fill"></i> Kunjungi Kami</a>
                <a href="https://www.youtube.com/channel/UCJpIkoTvWsfkDKfump_857A/videos" class="btn btn-danger"><i class="ri-youtube-fill"></i> Kunjungi Kami</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>