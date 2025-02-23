<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salecar</title>
    <!-- my style -->
    <link rel="stylesheet" href="/style/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/image/racecarsale_logo_element.jpg">
    <!-- carosel -->
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&family=Russo+One&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">

    <!-- NAVEBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand navbar-expand-lg" href="/"> <img src="/image/racecarsale_logo_element.jpg"
                    class="logo" alt="logo"> </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Le nostre auto">Le nostre auto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu" data-bs-popper="static">
                            <li><a class="dropdown-item" href="/Auto">Auto</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Componenti</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Partners</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <span class="input-group-text"><img src="/icon/search-interface-symbol.png"
                                class="icon"></span>
                        <div class="col-sm-10 col-md-8"><input class="form-control me-2" type="search"
                                placeholder="Cerca nel sito..." aria-label="Search"></div>
                    </div>
                    <button class="btn btn-outline-success btnSearch" type="submit"> Cerca</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- fine Navba -->

    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
        speed="600" parallax="true" pagination="true" pagination-clickable="true" navigation="true">
        <div slot="container-start" class="parallax-bg" style="background-image: url(image/rally2.jpg);"
            data-swiper-parallax="-23%"></div>

        <swiper-slide>
            <div class="title" data-swiper-parallax="-300">Auto da Rally Nuove e Usate – Potenza e Affidabilità su Ogni
                Terreno!</div>
            <div class="subtitle" data-swiper-parallax="-200">Scopri la nostra selezione di auto da rally, nuove e usate
                garantite, con il supporto di meccanici esperti!</div>
            <div class="text" data-swiper-parallax="-100">
                <p>
                    Sei un appassionato di rally alla ricerca dell’auto perfetta per affrontare ogni sfida? Nel nostro
                    showroom trovi auto da rally nuove e usate, selezionate per garantire prestazioni eccellenti e
                    massima sicurezza.

                    Le nostre auto usate sono rigorosamente testate e garantite da una rete di meccanici affiliati,
                    professionisti altamente qualificati che assicurano affidabilità e performance ottimali. Ogni
                    veicolo è sottoposto a controlli approfonditi, così puoi guidare con la certezza di avere un’auto
                    pronta a darti emozioni senza compromessi.

                </p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="title" data-swiper-parallax="-300">Auto Sportive Pronte per il Rally – Potenza da Strada a
                Sterrato!</div>
            <div class="subtitle" data-swiper-parallax="-200">Scopri le nostre auto sportive, nuove e usate garantite,
                ideali per essere trasformate in bolidi da rally!</div>
            <div class="text" data-swiper-parallax="-100">
                <p>
                    Se sogni un’auto sportiva con il potenziale per diventare una vera macchina da rally, sei nel posto
                    giusto! Offriamo una selezione di auto sportive ad alte prestazioni, perfette sia per la guida su
                    strada che per essere modificate e trasformate in veicoli da competizione.

                    Le nostre auto usate sono garantite da una rete di meccanici specializzati, esperti nel settore
                    motorsport, che assicurano affidabilità, resistenza e prestazioni ottimali. Grazie alla loro
                    esperienza, ogni auto può essere preparata per affrontare le sfide più estreme, dal grip
                    dell’asfalto alla difficoltà dello sterrato.
                </p>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="title" data-swiper-parallax="-300">Componenti Racing – Trasforma la Tua Auto in un Bolide da
                Rally!</div>
            <div class="subtitle" data-swiper-parallax="-200">Scopri i migliori componenti racing per trasformare la
                tua auto in un vero bolide da rally! Dai motori potenziati alle sospensioni rinforzate, offriamo tutto
                il necessario per migliorare prestazioni e sicurezza.</div>
            <div class="text" data-swiper-parallax="-100">
                <p>
                    Vuoi trasformare la tua auto in un’autentica macchina da rally? Nel nostro catalogo trovi componenti
                    di alta qualità, selezionati per garantire massime prestazioni, affidabilità e resistenza su
                    qualsiasi terreno.

                    Offriamo una vasta gamma di prodotti, tra cui:
                <ol>
                    <li> Motori e turbo potenziati per una spinta extra in gara.</li>
                    <li> Sospensioni rinforzate per il massimo controllo su sterrato e asfalto.</li>
                    <li> Freni racing ad alte prestazioni per una frenata impeccabile.</li>
                    <li> Roll bar e scocche rinforzate per la sicurezza in ogni condizione.</li>
                    <li> Assetti regolabili e differenziali autobloccanti per una guida precisa e aggressiva.</li>
                </ol>
                E se non sai da dove iniziare, puoi affidarti alla nostra rete di meccanici specializzati presenti sul
                territorio.
                </p>
            </div>
        </swiper-slide>
    </swiper-container>

    <!-- fine carousel -->
    <!-- footer -->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- carousel -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- my JS -->
    <script src="/javascript/script.js"></script>
</body>

</html>
