<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="fw-bold mb-4">Pengalaman</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/pengalaman.jpeg') ?>" class="card-img-top" alt="Fotografer">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Fotografer</h5>
                    <p class="card-text text-muted">Berpengalaman dalam mengabadikan momen-momen berharga dengan teknik komposisi dan pencahayaan yang profesional.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/pengalaman2.jpeg') ?>" class="card-img-top" alt="Videografer">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Videografer</h5>
                    <p class="card-text text-muted">Menciptakan karya visual bergerak yang bercerita dan menarik melalui proses produksi dan editing yang detail.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('image/Pengalaman4.jpeg') ?>" class="card-img-top" alt="Juara 1 Lomba">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Juara 1 Lomba</h5>
                    <p class="card-text text-muted">Meraih penghargaan tertinggi dalam kompetisi kreatif tingkat daerah sebagai bukti dedikasi dan kualitas karya.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
