<?php
$parent = "piemeri";
$title = "Piemēri";
include '../includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

<p>Šajos piemēros ir attēloti iespējamie teorētiskie esošo un topošo sistēmu dizaini un saskarņu salikumi.</p>


<h2>Lejupielādes</h2>

<p>Dizaina sistēma ir pieejama lejupielādei <a href="https://github.com/igstudija/dizaina-sistema-skola2030">GutHub</a>.</p>

<p><a href="elementi.xd"><i class="ri-file-2-fill"></i> Dizaina sistēmas elementi (Adobe XD)</a></p>

<p><a href="paraugi.xd"><i class="ri-file-2-fill"></i> Dizaina sistēmas paraugi (Adobe XD)</a></p>

<h2 class="mt-5">Sistēmu piemēri</h2>

<div class="row d-flex align-items-stretch ds-sadalas">
  <div class="col-md-3 mb-3">
    <div class="card">
  <div class="card-body">
    <h2>Autorizācija</h2>
   <a href="/piemeri/autorizacija.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
  <div class="card-body">
    <h2>E-mācību vide (Moodle)</h2>
   <a href="/piemeri/mana.skola2030.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
  <div class="card-body">
    <h2>mape.skola2030.lv</h2>
     <a href="/piemeri/mape.skola2030.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card">
  <div class="card-body">
    <h2>Tava klase</h2>
   <a href="/piemeri/tavaklase.php">Vairāk <i class="ri-arrow-right-line"></i></a>
  </div>
</div>
  </div>


</div>



            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
