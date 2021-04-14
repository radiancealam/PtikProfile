<?= $this->extend('templates/main'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container">
        <div class="section-title mt-5" data-aos="zoom-in" data-aos-delay="300">
            <h2>STRUKTUR ORGANISASI S1 - PTIK</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="300">
                <img src="<?= base_url(); ?>/assets/img/struktur.png" class="img-thumbnail" alt="">
            </div>
        </div>
    </div>
</section>

<section class="services section-bg">
    <div class="container">
        <div class="section-title mt-5" data-aos="zoom-in" data-aos-delay="300">
            <h2>BIDANG PEMINATAN</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <h4 class="title"><a href="">RPL</a></h4>
                    <p class="description">
                        Rekayasa Perangkat Lunak (RPL) merupakan salah satu bidang yang mempelajari dan mendalami terkait cara-cara pengembangan perangkat lunak. Pengembangan perangkat lunak didalamnya sudah termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak, dan manajemen kualitas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <h4 class="title"><a href="">TKJ</a></h4>
                    <p class="description">
                        Teknik Komputer dan Jaringan (TKJ) merupakan salah satu bidang yang mendalami terkait dengan kemampuan algoritma, dan pemrograman komputer, trouble shooting permasalahan komputer dan jaringan komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <h4 class="title"><a href="">Multimedia</a></h4>
                    <p class="description">
                        Multimedia (MM) merupakan salah satu bidang yang mempelajari tentang desain grafis dan percetakan, pengembangan multimedia (baik cetak maupun digital), pengembangan permainan (biasanya membangun sebuah game berbasis 2D ataupun 3D), hingga tentang produksi sinema dan perfilman menggunakan teknik audio video.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>