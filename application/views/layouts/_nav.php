<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url('home/') ?>">
            <img src="<?= base_url('assets/img/smk.png') ?>" alt="" style="width: 40px;">

            <div style="line-height: 1.15;">
                <strong>SMKN 2</strong><br>
                <strong>KARANGANYAR</strong>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('home/') ?>">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/profil') ?>">
                        PPDB
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/artikel') ?>">
                        BLUD
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#pkl">
                        PKL & BKK
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>