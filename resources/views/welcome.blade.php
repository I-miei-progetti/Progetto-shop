<x-layout>



{{-- carousel --}}


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

<div class="container my-1">
    <div class="row justify-content-center">
       <h2 class="text-center my-5 text-light">Le Ultime Novità</h2>
        @foreach ($cars as $car)
            <div class="col-12 col-md-3 d-flex justify-content-center mb-5">
               <x-card 
               :car="$car"
               />
            </div>

        @endforeach
    </div>
</div>

</x-layout>
