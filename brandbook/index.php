<?php
$parent = "brandbook";
$title = "Zīmola grāmata";
include '../includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

<p>Te par zīmola grāmatu...</p>

<div class="row d-flex align-items-stretch ds-sadalas">
  <div class="col">
    <div class="card">
  <div class="card-body">
    <h2>Logotips</h2>
   <a href="/brandbook/logo.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>
  <div class="col">
    <div class="card">
  <div class="card-body">
    <h2>Krāsas</h2>
     <a href="/brandbook/krasas.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>
  <div class="col">
    <div class="card">
  <div class="card-body">
    <h2>Teksti</h2>
   <a href="/brandbook/teksti.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>
  <div class="col">
    <div class="card">
  <div class="card-body">
    <h2>Ikonas</h2>
     <a href="/brandbook/ikonas.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>

</div>



            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
