<nav>
    <ul class="menu" id="menu">

        <li><a href="/" class="topnav <?php if ($title == "Ievads" )  {echo 'active';} ?>"><i class="bi bi-play"></i> <txt>Ievads</txt></a></li>

        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#brandbook" class="<?php if ($parent != "brandbook" ) { echo 'collapsed'; } else {echo 'active';} ?>" aria-expanded="false"><i class="ri-book-3-line"></i>
                <txt>Zīmola grāmata</txt>
            </span>

            <ul id="brandbook" class="collapse <?php if ($parent == "brandbook" && ($_COOKIE['minimenu']=="off" || $_COOKIE['minimenu']=="")) { echo 'show'; } ?>" data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Zīmola grāmata") { echo "active"; } ?>" href="/brandbook">Par zīmola grāmatu</a></li>
                <li><a class="nav <?php if ($saite == "/brandbook/logo.php") { echo "active"; } ?>" href="/brandbook/logo.php">Logotips</a></li>
                <li><a class="nav <?php if ($saite == "/brandbook/krasas.php") { echo "active"; } ?>" href="/brandbook/krasas.php">Krāsas</a></li>
                <li><a class="nav <?php if ($saite == "/brandbook/teksti.php") { echo "active"; } ?>" href="/brandbook/teksti.php">Teksti</a></li>
                <li><a class="nav <?php if ($saite == "/brandbook/ikonas.php") { echo "active"; } ?>" href="/brandbook/ikonas.php">Ikonas</a></li>
                <li><a class="nav <?php if ($saite == "/brandbook/elementi.php") { echo "active"; } ?>" href="/brandbook/elementi.php">Grafiskie elementi</a></li>

            </ul>

        </li>

        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#visparigi" class="<?php if ($parent != "visparigi" ) { echo 'collapsed'; } else {echo 'active';} ?>" aria-expanded="false"><i class="bi bi-laptop"></i>
                <txt>Vispārīgi</txt>
            </span>

            <ul id="visparigi" class="collapse <?php if ($parent == "visparigi" && ($_COOKIE['minimenu']=="off" || $_COOKIE['minimenu']=="")) { echo 'show'; } ?>" data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Vispārīgi") { echo "active"; } ?>" href="/visparigi">Ievads</a></li>
                <li><a class="nav <?php if ($saite == "/visparigi/izkartojums.php") { echo "active"; } ?>" href="/visparigi/izkartojums.php">Izkārtojums</a></li>
                <li><a class="nav <?php if ($saite == "/visparigi/krasas.php") { echo "active"; } ?>" href="/visparigi/krasas.php">Krāsas</a></li>
                <li><a class="nav <?php if ($saite == "/visparigi/tipografija.php") { echo "active"; } ?>" href="/visparigi/tipografija.php">Teksti</a></li>
                <li><a class="nav <?php if ($saite == "/visparigi/ikonas.php") { echo "active"; } ?>" href="/visparigi/ikonas.php">Ikonas</a></li>

            </ul>

        </li>
        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#komponentes" class="<?php if ($parent != "komponentes") { echo 'collapsed'; } else {echo 'active';} ?>" aria-expanded="false"><i class="bi bi-puzzle"></i>
                <txt>Komponentes</txt>
            </span>
            <ul id="komponentes" class="collapse <?php if ($parent == "komponentes" && ($_COOKIE['minimenu']=="off" || $_COOKIE['minimenu']=="")) { echo 'show'; } ?>" data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Komponentes") { echo "active"; } ?>" href="/komponentes">Par komponentēm</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/akordeoni.php") { echo "active"; } ?>" href="/komponentes/akordeoni.php">Akordeoni</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/attelu-paraksti.php") { echo "active"; } ?>" href="/komponentes/attelu-paraksti.php">Attēlu paraksti</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/birkas.php") { echo "active"; } ?>" href="/komponentes/birkas.php">Birkas</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/datu-ievades-ieteikumi.php") { echo "active"; } ?>" href="/komponentes/datu-ievades-ieteikumi.php">Datu ievades ieteikumi</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/datu-ievades-laukums.php") { echo "active"; } ?>" href="/komponentes/datu-ievades-laukums.php">Datu ievades laukums</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/formas.php") { echo "active"; } ?>" href="/komponentes/formas.php">Formas</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/navigacija.php") { echo "active"; } ?>" href="/komponentes/navigacija.php">Galvenā navigācija</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/galerijas.php") { echo "active"; } ?>" href="/komponentes/galerijas.php">Galerijas</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/galvene.php") { echo "active"; } ?>" href="/komponentes/galvene.php">Galvene</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/izlecosie-logi.php") { echo "active"; } ?>" href="/komponentes/izlecosie-logi.php">Modālie logi</a></li>
                  <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/info-lodzini.php") { echo "active"; } ?>" href="/komponentes/info-lodzini.php">Info lodziņi</a></li>
                  <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/izlecosie-pazinojumi.php") { echo "active"; } ?>" href="/komponentes/izlecosie-pazinojumi.php">Izlecošie paziņojumi</a></li>
                  <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/izcelts-teksts.php") { echo "active"; } ?>" href="/komponentes/izcelts-teksts.php">Izcelts teksts</a></li>
                  <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/iscelu-poga.php") { echo "active"; } ?>" href="/komponentes/iscelu-poga.php">Īsceļu poga</a></li>
                  <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/kajene.php") { echo "active"; } ?>" href="/komponentes/kajene.php">Kājene</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/kartinas.php") { echo "active"; } ?>" href="/komponentes/kartinas.php">Kartiņas</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/koks.php") { echo "active"; } ?>" href="/komponentes/koks.php">Koka skata navigācija</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/lapu-numeracija.php") { echo "active"; } ?>" href="/komponentes/lapu-numeracija.php">Lapu numerācija</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/mapes.php") { echo "active"; } ?>" href="/komponentes/mapes.php">Mapes</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/navigacijas-cels.php") { echo "active"; } ?>" href="/komponentes/navigacijas-cels.php">Navigācijas ceļš</a></li>
                  <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/pazinojumi.php") { echo "active"; } ?>" href="/komponentes/pazinojumi.php">Paziņojumi</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/padomu-riki.php") { echo "active"; } ?>" href="/komponentes/padomu-riki.php">Padomu rīki</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/pogas.php") { echo "active"; } ?>" href="/komponentes/pogas.php">Pogas</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/progresa-indikatori.php") { echo "active"; } ?>" href="/komponentes/progresa-indikatori.php">Progresa indikātori</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/raksti.php") { echo "active"; } ?>" href="/komponentes/raksti.php">Raksti</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/saraksti.php") { echo "active"; } ?>" href="/komponentes/saraksti.php">Saraksti</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/komponentes/tabulas.php") { echo "active"; } ?>" href="/komponentes/tabulas.php">Tabulas</a></li>

            </ul>
        </li>

        <li class="has-children">
          <span data-bs-toggle="collapse" data-bs-target="#piemeri" class="<?php if ($parent != "piemeri") { echo 'collapsed'; } else {echo 'active';}  ?>" aria-expanded="false"><i class="bi bi-eye"></i>
                <txt>Piemēri</txt>
            </span>
            <ul id="piemeri" class="collapse <?php if ($parent == "piemeri" && ($_COOKIE['minimenu']=="off" || $_COOKIE['minimenu']=="")) { echo 'show'; } ?>" data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Piemēri") { echo "active"; } ?>" href="/piemeri">Par piemēriem</a></li>

  <li><a class="nav <?php if ($saite == "/piemeri/autorizacija.php") { echo "active"; } ?>" href="/piemeri/autorizacija.php">Autorizācija</a></li>

                <li><a class="nav <?php if ($saite == "/piemeri/mana.skola2030.php") { echo "active"; } ?>" href="/piemeri/mana.skola2030.php">E-mācību vide</a></li>
                <li><a class="nav <?php if ($saite == "/piemeri/mape.skola2030.php") { echo "active"; } ?>" href="/piemeri/mape.skola2030.php">mape.skola2030.lv</a></li>
                <li><a class="nav <?php if ($saite == "/piemeri/tavaklase.php") { echo "active"; } ?>" href="/piemeri/tavaklase.php">Tava klase</a></li>

            </ul>
        </li>

    </ul>

</nav>
