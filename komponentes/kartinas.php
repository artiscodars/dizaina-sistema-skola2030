<?php
$parent = "komponentes";
$title = "Kartiņas ";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">

                <div class="row">

                    <div class="col-md-3">

                        <div class="card">
                            <img src="/images/meitenes.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                                <a href="#" class="btn btn-primary">Aiziet</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="card mb-3">
                            <img src="/images/meitenes.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                                <p class="card-text"><small class="text-muted">Atjaunots pirms 3 minūtēm</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                                <p class="card-text"><small class="text-muted">Atjaunots pirms 3 minūtēm</small></p>
                            </div>
                            <img src="/images/meitenes.jpg" class="card-img-bottom" alt="...">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="card bg-dark text-white">
                            <img src="/images/meitenes.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                                <p class="card-text">Atjaunots pirms 3 minūtēm</p>
                            </div>
                        </div>

                    </div>

                </div>
                <br>

                <div class="card mb-3" style="max-width: 640px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/images/meitenes.jpg" alt="..." style="max-width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h2>Tipi</h2>

            <h3>Tekstuāla kartiņa</h3>

            <div class="bd-example">
                <div class="card">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum scelerisque massa,
                        quis suscipit felis imperdiet sit amet.
                    </div>
                </div>
            </div>

            <h3>Virsraksts, teksts un saites</h3>

            <div class="bd-example">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Kartiņas nosaukums</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Apakšvirsraksts</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum
                            scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                        <a href="#" class="card-link">Saite A</a>
                        <a href="#" class="card-link">Saite B</a>
                    </div>
                </div>
            </div>

            <h3>Katiņu galvene un kājene</h3>

            <div class="bd-example">
                <div class="card">
                    <div class="card-header">
                        Izceltā
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>
            </div>

            <div class="bd-example">
                <div class="card">
                    <h5 class="card-header">Izceltā</h5>
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>
            </div>

            <div class="bd-example">

                <div class="card text-center">
                    <div class="card-header">
                        Izceltā
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 dienas atpakaļ
                    </div>
                </div>

            </div>

            <h2>Teksts izlīdzināšana</h2>

            <div class="bd-example">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>

                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>

                <div class="card text-end mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>
            </div>

            <h2>Katiņas ar navigāciju</h2>

            <div class="bd-example">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="#">Aktīva</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Saite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Atspējots</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>
            </div>

            <div class="bd-example">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Aktīva</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Saite</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Atspējots</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kaut kāds nosaukums</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">Aiziet</a>
                    </div>
                </div>
            </div>

            <h2>Kartiņu stili</h2>

            <div class="bd-example">

                <div class="row">

                    <div class="col">

                        <div class="card text-white tonis-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Promārās kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card text-white tumsi-peleks-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Sekundārās kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card text-white zals-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Labi Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card text-white sarkans-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Bīstami Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card text-white oranzs-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Uzmanību Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card text-white tirkizs-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Info Kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card text-dark gaisi-peleks-bg mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Gaišas kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">

                        <div class="card border-tonis mb-3" style="max-width: 18rem;">
                            <div class="card-header tonis">Galvene</div>
                            <div class="card-body tonis">
                                <h5 class="card-title">Primārās kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card border-tumsi-peleks mb-3" style="max-width: 18rem;">
                            <div class="card-header tumsi-peleks">Galvene</div>
                            <div class="card-body tumsi-peleks">
                                <h5 class="card-title">Sekundārās kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card border-zals mb-3" style="max-width: 18rem;">
                            <div class="card-header zals">Galvene</div>
                            <div class="card-body zals">
                                <h5 class="card-title">Izpildīts kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card border-sarkans mb-3" style="max-width: 18rem;">
                            <div class="card-header sarkans">Galvene</div>
                            <div class="card-body sarkans">
                                <h5 class="card-title">Bīstami kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card border-oranzs mb-3" style="max-width: 18rem;">
                            <div class="card-header oranzs">Galvene</div>
                            <div class="card-body oranzs">
                                <h5 class="card-title">Uzmanību kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card border-tirkizs mb-3" style="max-width: 18rem;">
                            <div class="card-header tirkizs">Galvene</div>
                            <div class="card-body tirkizs">
                                <h5 class="card-title">Info kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>
                        <div class="card border-gaisi-peleks mb-3" style="max-width: 18rem;">
                            <div class="card-header">Galvene</div>
                            <div class="card-body">
                                <h5 class="card-title">Gaišās kartiņas nosaukums</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                                    vestibulum scelerisque massa, quis suscipit felis imperdiet sit amet.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
