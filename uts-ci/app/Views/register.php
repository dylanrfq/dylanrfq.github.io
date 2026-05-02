<?= $this->extend('layout_clear') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Register</h2>
                    <p class="text-muted">Buat akun baru Anda</p>
                </div>

                <form action="<?= base_url('/register') ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p class="mb-0">Sudah punya akun? <a href="<?= base_url('/login') ?>">Login</a></p>
                    <a href="<?= base_url('/') ?>" class="d-block mt-2 text-decoration-none small">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
