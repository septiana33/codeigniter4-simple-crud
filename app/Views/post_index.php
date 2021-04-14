<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('posts/add') ?>" class="btn btn-secondary" title="Tambah Postingan">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg>
    Tambah
</a>
<hr>

<?= $this->include('templates/alert') ?>

<div class="text-start">
    <?php if ($posts) : ?>
        <?php foreach ($posts as $post) : ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?= base_url('posts/detail?id=' . $post->id) ?>" style="text-decoration: none" title="<?= $post->title ?>"><?= $post->title ?></a>
                    </h5>
                    <p class="card-text">
                        <?php if (strlen($post->content) <= 255) : ?>
                            <?= $post->content ?>.
                        <?php else : ?>
                            <?= substr($post->content, 0, 255) ?> ...
                        <?php endif ?>
                    </p>
                    <p>
                        <small>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 19">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg>
                            <?= $post->created_at ?>
                        </small>
                    </p>
                </div>
            </div>
        <?php endforeach ?>
        <div class="mt-3">
            <?= $pager->links() ?>
        </div>
    <?php else : ?>
        <div class="card mt-3">
            <div class="card-body text-center">
                <p class="card-text">No post avaliable.</p>
            </div>
        </div>
    <?php endif ?>

    <?= $this->endSection() ?>