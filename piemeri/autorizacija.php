<?php
$parent = "piemeri";
$title = "Autorizācija";

include '../includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

<p>Šis ir vienkāršots autorizācijas formas piemērs, ko var papildināt ar nepieciešamajiem elementiem. Ja tiek izmantota vienotā autorizācija (pieteikšanās), tad sistēmu izvēle parasti ir nākamajā solī.</p>

<div class="bd-example">


  <div class="row">

<div class="col">



  <main class="form-signin">
    <form>
      <img src="/images/logo.svg" alt="" class="logo">


      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">E-pasts</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Parole</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Atcerēties mani
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Autorizēties</button>
<a href="#" class="btn btn-link mt-3">Aizmirsu paroli</a>


      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>




</div>

  </div>




</div>




        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
