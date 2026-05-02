<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">DYLAN RIFQI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= (url_is('/') ? 'active text-primary' : '') ?>" href="<?= base_url('/') ?>">Beranda</a>
                </li>
                <?php if (session()->get('isLoggedIn')): ?>
                <li class="nav-item">
                    <a class="nav-link <?= (url_is('/pengalaman') ? 'active text-primary' : '') ?>" href="<?= base_url('/pengalaman') ?>">Pengalaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (url_is('/karya') ? 'active text-primary' : '') ?>" href="<?= base_url('/karya') ?>">Karya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (url_is('/jasa') ? 'active text-primary' : '') ?>" href="<?= base_url('/jasa') ?>">Jasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (url_is('/sertifikat') ? 'active text-primary' : '') ?>" href="<?= base_url('/sertifikat') ?>">Sertifikat</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-outline-danger btn-sm" href="<?= base_url('/logout') ?>">Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-primary btn-sm" href="<?= base_url('/login') ?>">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
