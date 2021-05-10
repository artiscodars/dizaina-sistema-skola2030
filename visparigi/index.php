<?php
$parent = "visparigi";
$title = "Vispārīgi";
include '../includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>


            <p>Dizaina sistēmas vispārīgā daļa apraksta interneta sistēmu vēlamo izkārtojumu, izmantojamās krāsas, burtu veidolus un izmērus, kā arī piedāvā ikonu bibliotāku.</p>

            <div class="row d-flex align-items-stretch ds-sadalas">
              <div class="col">
                <div class="card">
              <div class="card-body">
                <h2>Izkārtojums</h2>
               <a href="/visparigi/izkartojums.php">Vairāk <i class="ri-arrow-right-line"></i></a>
              </div>
            </div>
              </div>
              <div class="col">
                <div class="card">
              <div class="card-body">
                <h2>Krāsas</h2>
                 <a href="/visparigi/krasas.php">Vairāk <i class="ri-arrow-right-line"></i></a>
              </div>
            </div>
              </div>
              <div class="col">
                <div class="card">
              <div class="card-body">
                <h2>Teksti</h2>
               <a href="/visparigi/tipografija.php">Vairāk <i class="ri-arrow-right-line"></i></a>
              </div>
            </div>
              </div>
              <div class="col">
                <div class="card">
              <div class="card-body">
                <h2>Ikonas</h2>
                 <a href="/visparigi/ikonas.php">Vairāk <i class="ri-arrow-right-line"></i></a>
              </div>
            </div>
              </div>

            </div>




            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
