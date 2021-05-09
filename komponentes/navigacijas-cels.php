<?php
$parent = "komponentes";
$title = "Navigācijas ceļš ";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Sākums</li>
                    </ol>
                </nav>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sākums</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sadļa</li>
                    </ol>
                </nav>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sākums</a></li>
                        <li class="breadcrumb-item"><a href="#">Sadļa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sadļa</li>
                    </ol>
                </nav>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>