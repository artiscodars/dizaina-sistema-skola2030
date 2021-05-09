<?php
$parent = "komponentes";
$title = "Attēlu paraksti";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">

                <div class="row">

                    <div class="col">
                        <div class="image-wrap">
                            <img src="/images/meitenes.jpg" class="card-img-top" alt="...">
                            <div class="caption text-start">att. Divas meitenes mūzikas stundā</div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="image-wrap">
                            <img src="/images/meitenes.jpg" class="card-img-top" alt="...">
                            <div class="caption text-end">att. Divas meitenes mūzikas stundā</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
