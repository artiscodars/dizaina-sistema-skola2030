<nav>
    <ul class="menu" id="menu">

        <li><a href="/ds/" class="topnav <?php if ($title == "Ievads" )  {echo 'active';} ?>"><i class="bi bi-play"></i>
                <txt>Ievads</txt>
            </a></li>

        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#brandbook"
                class="<?php if ($parent != "brandbook" ) { echo 'collapsed'; } else {echo 'active';} ?>"
                aria-expanded="false"><i class="bi bi-laptop"></i>
                <txt>Zīmola grāmata</txt>
            </span>

            <ul id="brandbook"
                class="collapse <?php if ($parent == "brandbook" && $_COOKIE['minimenu']=="off") { echo 'show'; } ?>"
                data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Zīmola grāmata") {
                                                        echo "active";
                                                    } ?>" href="/ds/brandbook">Par zīmola grāmatu</a></li>

                <li><a class="nav <?php if ($saite == "/ds/brandbook/logo.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/brandbook/logo.php">Logotips</a></li>
                <li><a class="nav <?php if ($saite == "/ds/brandbook/krasas.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/brandbook/krasas.php">Krāsas</a></li>
                <li><a class="nav <?php if ($saite == "/ds/brandbook/teksti.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/brandbook/teksti.php">Teksti</a></li>

                <li><a class="nav <?php if ($saite == "/ds/brandbook/ikonas.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/brandbook/ikonas.php">Ikonas</a></li>

            </ul>

        </li>

        <li class="has-children">
            <span data-bs-toggle="collapse" data-bs-target="#visparigi"
                class="<?php if ($parent != "visparigi" ) { echo 'collapsed'; } else {echo 'active';} ?>"
                aria-expanded="false"><i class="bi bi-laptop"></i>
                <txt>Vispārīgi</txt>
            </span>

            <ul id="visparigi"
                class="collapse <?php if ($parent == "visparigi" && $_COOKIE['minimenu']=="off") { echo 'show'; } ?>"
                data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Vispārīgi") {
                                                        echo "active";
                                                    } ?>" href="/ds/visparigi">Ievads</a></li>

                <li><a class="nav <?php if ($saite == "/ds/visparigi/izkartojums.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/visparigi/izkartojums.php">Izkārtojums</a></li>
                <li><a class="nav <?php if ($saite == "/ds/visparigi/krasas.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/visparigi/krasas.php">Krāsas</a></li>
                <li><a class="nav <?php if ($saite == "/ds/visparigi/tipografija.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/visparigi/tipografija.php">Tipogrāfija</a></li>

                <li><a class="nav <?php if ($saite == "/ds/visparigi/ikonas.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/visparigi/ikonas.php">Ikonas</a></li>

            </ul>

        </li>
        <li class="has-children"><span data-bs-toggle="collapse" data-bs-target="#komponentes"
                class="<?php if ($parent != "komponentes") { echo 'collapsed'; } else {echo 'active';} ?>"
                aria-expanded="false"><i class="bi bi-puzzle"></i>
                <txt>Komponentes</txt>
            </span>
            <ul id="komponentes"
                class="collapse <?php if ($parent == "komponentes" && $_COOKIE['minimenu']=="off") { echo 'show'; } ?>"
                data-bs-parent="#menu">

                <li><a class="nav <?php if ($title == "Komponentes") {
                                                        echo "active";
                                                    } ?>" href="/ds/komponentes">Par komponentēm</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/akordeoni.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/akordeoni.php">Akordeoni</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/formas.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/formas.php">Formas</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/izlecosie-logi.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/izlecosie-logi.php">Modālie logi</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/kartinas.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/kartinas.php">Kartiņas</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/koks.php") {
                                                                            echo "active";
                                                                        } ?>" href="/ds/komponentes/koks.php">Koka
                        skata navigācija</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/lapu-numeracija.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/lapu-numeracija.php">Lapu numerācija</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/navigacija.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/navigacija.php">Galvenā navigācija</a>
                </li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/navigacijas-cels.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/navigacijas-cels.php">Navigācijas ceļš</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/padomu-riki.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/padomu-riki.php">Padomu rīki</a>
                </li>
                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/pazinojumi.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/pazinojumi.php">Paziņojumi</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/pogas.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/pogas.php">Pogas</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/progresa-indikatori.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/progresa-indikatori.php">Progresa indikātori</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/saraksti.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/saraksti.php">Saraksti</a></li>
                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/tabulas.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/tabulas.php">Tabulas</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/mapes.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/mapes.php">Mapes</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/attelu-paraksti.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/attelu-paraksti.php">Attēlu paraksti</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/raksti.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/raksti.php">Raksti</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/info-lodzini.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/info-lodzini.php">Info lodziņi</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/izlecosie-pazinojumi.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/izlecosie-pazinojumi.php">Izlecošie paziņojumi</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/izcelts-teksts.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/izcelts-teksts.php">Izcelts teksts</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/datu-ievades-laukums.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/datu-ievades-laukums.php">Datu ievades laukums</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/datu-ievades-ieteikumi.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/datu-ievades-ieteikumi.php">Datu ievades ieteikumi</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/birkas.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/birkas.php">Birkas</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/iscelu-poga.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/iscelu-poga.php">Īsceļu poga</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/galerijas.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/galerijas.php">Galerijas</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/galvene.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/galvene.php">Galvene</a></li>

                <li class="has-children"><a class="nav <?php if ($saite == "/ds/komponentes/kajene.php") {
                                                                            echo "active";
                                                                        } ?>"
                        href="/ds/komponentes/kajene.php">Kājene</a></li>

            </ul>
        </li>

        <li class="has-children"><span data-bs-toggle="collapse" data-bs-target="#piemeri"
                class="<?php if ($parent != "piemeri") { echo 'collapsed'; } else {echo 'active';}  ?>"
                aria-expanded="false"><i class="bi bi-eye"></i>
                <txt>Piemēri</txt>
            </span>
            <ul id="piemeri"
                class="collapse <?php if ($parent == "piemeri" && $_COOKIE['minimenu']=="off") { echo 'show'; } ?>"
                data-bs-parent="#menu">


                <li><a class="nav <?php if ($title == "Piemēri") {
                                                        echo "active";
                                                    } ?>" href="/ds/piemeri">Par piemēriem</a></li>



                <li><a class="nav <?php if ($saite == "/ds/piemeri/mana.skola2030.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/piemeri/mana.skola2030.php">E-mācību vide</a></li>

                <li><a class="nav <?php if ($saite == "/ds/piemeri/mape.skola2030.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/piemeri/mape.skola2030.php">mape.skola2030.lv</a>
                </li>

                <li><a class="nav <?php if ($saite == "/ds/piemeri/tavaklase.php") {
                                                        echo "active";
                                                    } ?>" href="/ds/piemeri/tavaklase.php">Tava klase</a></li>

            </ul>
        </li>

    </ul>

</nav>
