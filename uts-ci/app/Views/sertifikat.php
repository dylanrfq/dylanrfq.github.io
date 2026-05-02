<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <h2 class="fw-bold mb-4">Sertifikat & Piagam</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 overflow-hidden">
                <a href="<?= base_url('image/PiagamJur1.jpeg') ?>" target="_blank">
                    <img src="<?= base_url('image/PiagamJur1.jpeg') ?>" class="card-img-top" alt="Sertifikat 1">
                </a>
                <div class="card-body">
                    <p class="card-text text-center text-muted">Piagam Penghargaan Juara 1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 overflow-hidden">
                <a href="<?= base_url('image/PiagamJur2.jpeg') ?>" target="_blank">
                    <img src="<?= base_url('image/PiagamJur2.jpeg') ?>" class="card-img-top" alt="Sertifikat 2">
                </a>
                <div class="card-body">
                    <p class="card-text text-center text-muted">Piagam Penghargaan Juara 2</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 overflow-hidden">
                <a href="<?= base_url('image/PiagamTTG.jpeg') ?>" target="_blank">
                    <img src="<?= base_url('image/PiagamTTG.jpeg') ?>" class="card-img-top" alt="Sertifikat 3">
                </a>
                <div class="card-body">
                    <p class="card-text text-center text-muted">Piagam Penghargaan TTG</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
