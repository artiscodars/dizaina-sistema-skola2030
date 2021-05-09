<?php
$parent = "komponentes";
$title = "Galvene";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">

              <header>

                  <div class="menu_opener"><i class="bi bi-list"></i></div>

                  <div class="app_title"><?php echo $title; ?></div>

                  <div class="top_nav">

                      <span class="top_nav_items">
                          <a href="#" class="btn btn-link"><i class="bi bi-question-circle"></i></a>

                          <a href="#" class="btn btn-link"><i class="bi bi-info-circle"></i></a>

                          <a href="#" class="btn btn-link"><i class="bi bi-chat"></i></a>

                          <a href="#" class="btn btn-link"><i class="bi bi-bell"></i></a>

                          <a href="#" class="btn btn-link"><i class="bi bi-grid-3x3-gap-fill"></i></a>
                      </span>
                      <div class="account">
                          <span>AC</span>
                      </div>

                      <a href="#" class="btn btn-link dots"><i class="bi bi-three-dots-vertical"></i></a>

                  </div>

              </header>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
