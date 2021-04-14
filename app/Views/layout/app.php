<?= $this->include('templates/header') ?>

<body class="bg-light fw-light pt-5">
    <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 h-100 m-0 p-2 mx-auto bg-white shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="m-5">
                        <h2 class="text-center fw-light">Codeigniter 4 Simple CRUD</h2>
                    </p>
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('templates/footer') ?>