<?php
$parent = "komponentes";
$title = "Pogas ";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>
            <div class="bd-example">

                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-primary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>

                <button type="button" class="btn btn-link">Link</button>
            </div>

            <h2>Pogas ar līnijām</h2>

            <div class="bd-example">

                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-primary">Secondary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
                <button type="button" class="btn btn-outline-light">Light</button>
                <button type="button" class="btn btn-outline-dark">Dark</button>
            </div>

            <h2>Neaktīvas pogas</h2>

            <div class="bd-example">

                <button type="button" class="btn btn-primary" disabled="">Primary</button>
                <button type="button" class="btn btn-primary" disabled="">Secondary</button>
                <button type="button" class="btn btn-success" disabled="">Success</button>
                <button type="button" class="btn btn-danger" disabled="">Danger</button>
                <button type="button" class="btn btn-warning" disabled="">Warning</button>
                <button type="button" class="btn btn-info" disabled="">Info</button>
                <button type="button" class="btn btn-light" disabled="">Light</button>
                <button type="button" class="btn btn-dark" disabled="">Dark</button>

                <button type="button" class="btn btn-link" disabled="">Link</button>
            </div>

            <div class="bd-example">

                <button type="button" class="btn btn-outline-primary" disabled="">Primary</button>
                <button type="button" class="btn btn-outline-primary" disabled="">Secondary</button>
                <button type="button" class="btn btn-outline-success" disabled="">Success</button>
                <button type="button" class="btn btn-outline-danger" disabled="">Danger</button>
                <button type="button" class="btn btn-outline-warning" disabled="">Warning</button>
                <button type="button" class="btn btn-outline-info" disabled="">Info</button>
                <button type="button" class="btn btn-outline-light" disabled="">Light</button>
                <button type="button" class="btn btn-outline-dark" disabled="">Dark</button>
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