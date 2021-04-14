<?php if ($session->getFlashdata('success') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <p><?= $session->getFlashdata('success') ?></p>
    </div>
<?php endif ?>
<?php if ($session->getFlashdata('failed') !== NULL) : ?>
    <div class="alert alert-danger alert-dismissible fade show mt-3 mb-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <p>
            <strong>Terjadi kesalahan berikut:</strong>
        </p>
        <?php foreach ($session->getFlashdata('failed') as $error) : ?>
            <p>- <?= $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>