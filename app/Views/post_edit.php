<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('posts/detail?id=' . $id) ?>" class="btn btn-secondary" title="Kembali">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left<svg xmlns=" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
    </svg>
    Kembali
</a>
<hr>

<?= $this->include('templates/alert') ?>

<?php foreach ($posts as $post) : ?>
    <form method="POST" action="<?= base_url('posts/update?id=' . $id) ?>">
        <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
        <div>
            <label for="title" class="form-label">Judul Postingan</label>
            <input type="text" class="form-control" id="title" name="title" maxlength="100" autocomplete="off" value="<?= $post->title ?>">
        </div>
        <div class="mt-5">
            <label for="content" class="form-label">Konten Postingan</label>
            <textarea class="form-control" id="content" name="content" rows="10" autocomplete="off" style="resize: none"><?= $post->content ?></textarea>
        </div>
        <div class="d-grid gap-2 mt-5">
            <button type="submit" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                </svg>
                Perbarui Data
            </button>
        </div>
    </form>
<?php endforeach ?>

<?= $this->endSection() ?>