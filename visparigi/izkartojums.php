<?php
$parent = "visparigi";
$title = "Izkārtojums";

include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1><?php echo $title;?></h1>

            <h2 class="st-title">Datora ekrāna izmērā</h2>

            <div class="bd-example">

                <iframe src="/ds/index.php" class="izkartojums"></iframe>

            </div>

            <h2 class="st-title">Mobilā telefona ekrāna izmērā (375px * 667px)</h2>

            <div class="bd-example">

                <iframe src="/ds/index.php" class="izkartojums mob"></iframe>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>