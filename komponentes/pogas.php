<?php
$parent = "komponentes";
$title = "Pogas ";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>
            <div class="bd-example">

                <button type="button" class="btn btn-primary">Primārā</button>
                <button type="button" class="btn btn-primary">Sekundārā</button>
                <button type="button" class="btn btn-success">Izpildīt</button>
                <button type="button" class="btn btn-danger">Uzmanību</button>
                <button type="button" class="btn btn-warning">Brīdinājums</button>
                <button type="button" class="btn btn-info">Informācija</button>
                <button type="button" class="btn btn-light">Gaiša</button>
                <button type="button" class="btn btn-dark">Tumša</button>

                <button type="button" class="btn btn-link">Link</button>
            </div>

            <h2>Pogas ar līnijām</h2>

            <div class="bd-example">

                <button type="button" class="btn btn-outline-primary">Primārā</button>
                <button type="button" class="btn btn-outline-primary">Sekundārā</button>
                <button type="button" class="btn btn-outline-success">Izpildīt</button>
                <button type="button" class="btn btn-outline-danger">Uzmanību</button>
                <button type="button" class="btn btn-outline-warning">Brīdinājums</button>
                <button type="button" class="btn btn-outline-info">Informācija</button>
                <button type="button" class="btn btn-outline-light">Gaiša</button>
                <button type="button" class="btn btn-outline-dark">Tumša</button>
            </div>

            <h2>Neaktīvas pogas</h2>

            <div class="bd-example">

                <button type="button" class="btn btn-primary" disabled="">Primārā</button>
                <button type="button" class="btn btn-primary" disabled="">Sekundārā</button>
                <button type="button" class="btn btn-success" disabled="">Izpildīt</button>
                <button type="button" class="btn btn-danger" disabled="">Uzmanību</button>
                <button type="button" class="btn btn-warning" disabled="">Brīdinājums</button>
                <button type="button" class="btn btn-info" disabled="">Informācija</button>
                <button type="button" class="btn btn-light" disabled="">Gaiša</button>
                <button type="button" class="btn btn-dark" disabled="">Tumša</button>

                <button type="button" class="btn btn-link" disabled="">Link</button>
            </div>

            <div class="bd-example">

                <button type="button" class="btn btn-outline-primary" disabled="">Primārā</button>
                <button type="button" class="btn btn-outline-primary" disabled="">Sekundārā</button>
                <button type="button" class="btn btn-outline-success" disabled="">Izpildīt</button>
                <button type="button" class="btn btn-outline-danger" disabled="">Uzmanību</button>
                <button type="button" class="btn btn-outline-warning" disabled="">Brīdinājums</button>
                <button type="button" class="btn btn-outline-info" disabled="">Informācija</button>
                <button type="button" class="btn btn-outline-light" disabled="">Gaiša</button>
                <button type="button" class="btn btn-outline-dark" disabled="">Tumša</button>
            </div>

            <h2>Pogu izmēri</h2>

            <h3>Lielas pogas</h3>

            <div class="bd-example">
                <button type="button" class="btn btn-primary btn-lg">Liela poga</button>
                <button type="button" class="btn btn-primary btn-lg">Liela poga</button>

            </div>

            <h3>Mazas pogas</h3>

            <div class="bd-example">
                <button type="button" class="btn btn-primary btn-sm">Maza poga</button>
                <button type="button" class="btn btn-primary btn-sm">Maza poga</button>

            </div>

            <h2>Pogu grupas</h2>

            <div class="bd-example">

                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>

            </div>

            <h2>Pogu grupas vertikāli</h2>

            <div class="bd-example">

                <div class="btn-group-vertical btn-group-lg" role="group" aria-label="...">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group-vertical" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group-vertical btn-group-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>

            </div>

            <h3>Apvilkto pogu grupas</h3>
            <div class="bd-example">

                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-primary">Middle</button>
                    <button type="button" class="btn btn-outline-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-primary">Middle</button>
                    <button type="button" class="btn btn-outline-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-primary">Middle</button>
                    <button type="button" class="btn btn-outline-primary">Right</button>
                </div>

            </div>

            <h3>Apvilkto pogu grupas vertikāli</h3>
            <div class="bd-example">

                <div class="btn-group-vertical btn-group-lg" role="group" aria-label="...">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-primary">Middle</button>
                    <button type="button" class="btn btn-outline-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group-vertical" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-primary">Middle</button>
                    <button type="button" class="btn btn-outline-primary">Right</button>
                </div>
                <br> <br>
                <div class="btn-group-vertical btn-group-sm" role="group" aria-label="...">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-primary">Middle</button>
                    <button type="button" class="btn btn-outline-primary">Right</button>
                </div>

            </div>

            <h2>Pogas ar izslīdošo izvēlni</h2>

            <div class="bd-example">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>

            <h2>Pogas ar atdalītājiem</h2>

            <div class="bd-example">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Reference</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-reference="parent">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>

            </div>

            <h2>Pogu izvēlnes novietojums</h2>

            <div class="bd-example">

                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Right-aligned menu
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        Left-aligned, right-aligned lg
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        Right-aligned, left-aligned lg
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropstart
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

                <div class="btn-group dropend">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropend
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropup
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>

            </div>




        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
