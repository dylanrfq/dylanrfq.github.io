<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="fw-bold mb-4">Jasa</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/ftgrafi.jpg') ?>" class="card-img-top" alt="Jasa Fotografer">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Jasa Fotografer</h5>
                    <p class="card-text text-muted">Layanan fotografi untuk berbagai acara seperti wedding, event, maupun photoshoot produk dengan hasil berkualitas tinggi.</p>
                    <a href="https://wa.me/6281297287018" target="_blank" class="btn btn-primary mt-auto">Hubungi Saya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/videograper.jpg') ?>" class="card-img-top" alt="Jasa Videographer">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Jasa Videographer</h5>
                    <p class="card-text text-muted">Pembuatan konten video kreatif untuk YouTube, Instagram, maupun video profil perusahaan dengan editing profesional.</p>
                    <a href="https://wa.me/6281297287018" target="_blank" class="btn btn-primary mt-auto">Hubungi Saya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/timcreator.jpeg') ?>" class="card-img-top" alt="Video Drone">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Video Drone</h5>
                    <p class="card-text text-muted">Pengambilan gambar dan video dari udara menggunakan drone untuk memberikan perspektif yang unik dan megah.</p>
                    <a href="https://wa.me/6281297287018" target="_blank" class="btn btn-primary mt-auto">Hubungi Saya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
