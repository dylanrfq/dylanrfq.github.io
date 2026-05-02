<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5 text-center mb-4 mb-lg-0">
            <img src="<?= base_url('image/profil.png') ?>" alt="Dylan Rifqi Alfaizi" class="profile-img">
        </div>
        <div class="col-lg-7">
            <h1 class="display-4 fw-bold mb-2">DYLAN RIFQI ALFAIZI</h1>
            <h3 class="text-primary mb-4">Mahasiswa Teknik Informatika & Content Creator</h3>
            <p class="lead text-muted">
                Saya adalah seorang mahasiswa Teknik Informatika yang memiliki gairah besar dalam dunia teknologi dan kreatif visual. Dengan latar belakang akademis yang kuat, saya terus mengasah kemampuan dalam pengembangan perangkat lunak sambil mengeksplorasi potensi diri sebagai content creator di berbagai platform media sosial.
            </p>
            <p class="lead text-muted">
                Dunia digital bagi saya bukan sekadar baris kode, melainkan kanvas untuk bercerita melalui visual dan inovasi. Saya percaya bahwa kombinasi antara logika pemrograman dan estetika kreatif adalah kunci untuk menciptakan pengalaman digital yang luar biasa dan bermanfaat bagi banyak orang.
            </p>
            <div class="mt-4">
                <?php if (!session()->get('isLoggedIn')): ?>
                <a href="<?= base_url('/login') ?>" class="btn btn-primary me-2">Login Sekarang</a>
                <a href="<?= base_url('/register') ?>" class="btn btn-outline-primary">Daftar Akun</a>
                <?php else: ?>
                <a href="<?= base_url('/pengalaman') ?>" class="btn btn-primary">Lihat Portofolio</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
