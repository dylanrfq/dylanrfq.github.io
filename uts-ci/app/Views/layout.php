<?= view('components/header') ?>
<?= view('components/navbar') ?>

<main class="py-5">
    <?= $this->renderSection('content') ?>
</main>

<?= view('components/footer') ?>
