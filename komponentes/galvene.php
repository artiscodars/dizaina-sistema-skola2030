<?php
$parent = "komponentes";
$title = "Galvene";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <p>Galvene ir josla, kas izvietota katras lapas augšdaļā un satur sadaļas nosaukumu kreisajā pusē un darbību ikonas labajā pusē. Uz mobilajām ierīcēm galvenes ikonas tiek apvienotas vienā izvēlnē.</p>



            <h2>Piemēri</h2>

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

              <div class="bd-example">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="393" height="74" viewBox="0 0 393 74">
                  <defs>
                    <filter id="Rectangle_159" x="0" y="0" width="393" height="74" filterUnits="userSpaceOnUse">
                      <feOffset dy="3" input="SourceAlpha"/>
                      <feGaussianBlur stdDeviation="3" result="blur"/>
                      <feFlood flood-opacity="0.161"/>
                      <feComposite operator="in" in2="blur"/>
                      <feComposite in="SourceGraphic"/>
                    </filter>
                  </defs>
                  <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Rectangle_159)">
                    <rect id="Rectangle_159-2" data-name="Rectangle 159" width="375" height="56" transform="translate(9 6)" fill="#fff"/>
                  </g>
                  <path id="Path_3273" data-name="Path 3273" d="M0,0" transform="translate(9 62)" fill="none" stroke="#d9d9d9" stroke-width="1"/>
                  <path id="menu" d="M0,19.971V17.309H23.956v2.662Zm0-6.654V10.654H23.956v2.662ZM0,4H23.956V6.662H0Z" transform="translate(25.103 21.023)" fill="#804896"/>
                  <text id="Kalendārs" transform="translate(70 41)" fill="#804896" font-size="20"><tspan x="0" y="0">Kalendārs</tspan></text>
                  <path id="Path_3269" data-name="Path 3269" d="M18.95,8.42a1.6,1.6,0,1,1-1.6-1.67A1.636,1.636,0,0,1,18.95,8.42Z" transform="translate(344.103 19.25)" fill="#804896"/>
                  <path id="Path_3270" data-name="Path 3270" d="M18.95,17.42a1.6,1.6,0,1,1-1.6-1.67A1.636,1.636,0,0,1,18.95,17.42Z" transform="translate(344.103 16.58)" fill="#804896"/>
                  <path id="Path_3271" data-name="Path 3271" d="M18.95,26.42a1.6,1.6,0,1,1-1.6-1.67A1.636,1.636,0,0,1,18.95,26.42Z" transform="translate(344.103 13.909)" fill="#804896"/>
                  <circle id="Ellipse_22" data-name="Ellipse 22" cx="14.522" cy="14.522" r="14.522" transform="translate(305.523 19.478)" fill="#804896"/>
                  <text id="AC" transform="translate(310.872 37.884)" fill="#fff" font-size="13"><tspan x="0" y="0">AC</tspan></text>
                </svg>



              </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
