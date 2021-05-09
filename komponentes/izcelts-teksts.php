<?php
$parent = "komponentes";
$title = "Izcelts teksts";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">

                <div class="article">
                    <div class="row">
                        <div class="col-md-3">

                            <img src="/ds/images/meitenes.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="col">
                            <h3><a href="#">Kaut kāds <mark>raksta virsraksts</mark></a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend ex eget nulla
                                volutpat, vitae tempus <mark>felis pretium</mark>. Integer nec commodo mi, id porttitor
                                nibh.
                                Suspendisse
                                ultricies commodo eros sit amet venenatis. </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>