<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="fw-bold mb-4">Karya</h2>
    
    <div class="row mb-5">
        <div class="col-12">
            <div class="card overflow-hidden">
                <video controls autoplay muted class="w-100">
                    <source src="<?= base_url('image/vd.mp4') ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="card-body">
                    <h5 class="fw-bold">Cinematic Highlight Reel</h5>
                    <p class="text-muted mb-0">Video ini merupakan kompilasi karya terbaik saya dalam setahun terakhir, menampilkan teknik sinematografi dan editing yang saya kuasai.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/pengalaman.jpeg') ?>" class="card-img-top" alt="Fotografer Portfolio">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Portfolio Fotografer</h5>
                    <p class="text-muted">Kumpulan karya fotografi terbaik dengan berbagai tema.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/pengalaman2.jpeg') ?>" class="card-img-top" alt="Videografer Portfolio">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Portfolio Videografer</h5>
                    <p class="text-muted">Proyek video kreatif yang telah diselesaikan dengan hasil maksimal.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
