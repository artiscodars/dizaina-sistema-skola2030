<?php
$parent = "komponentes";
$title = "Galvenā navigācija ";
include '../includes/header.php'; ?>
<div class="container">

    <div class="row">
        <div class="col">

            <h1><?php echo $title;?></h1>

            <div class="bd-example">

                <?php include $_SERVER["DOCUMENT_ROOT"].'/ds/includes/menu.php'; ?>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>