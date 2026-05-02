<?= view('components/header') ?>

<main class="py-5 bg-light" style="min-height: 100vh; display: flex; align-items: center;">
    <?= $this->renderSection('content') ?>
</main>

<?= view('components/footer') ?>
