<header id="home" class="animated fadeIn fixed-top">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="./">
                        <img src="./assets/img/logo-target.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Sobre</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-sm-3 navbar-phone">
                <a href="tel:<?php echo $phoneLink ?>"><i class="fas fa-phone"></i>
                    <?php echo $phone ?></a>
            </div>

        </div>
    </div>
</header>