<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Os produtos Aura Verde Surgiram da vontade de instigar as pessoas ao que elas têm de melhor e fazer com que elas curtissem cada momento.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.png" />
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Pagina Inicial - Aura Verde</title>
</head>
<body>

<!--Menu -->
  <?php include_once "template-parts/menu.php" ?>
<!--End Menu -->
<!-- Slider-->
    <div class="container-fluid">
        <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/slider-1.png" alt="Primeiro slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/slider-2.png" alt="Segundo slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Próximo</span>
                        </a>
                      </div>
        </div>
    </div>
<!-- End Slider-->

<!-- O QUE NOS INSPIRA-->
  <?php $show_link = true; include_once "template-parts/o-que-nos-inspira.php" ?>
<!--END  O QUE NOS INSPIRA-->
<!--SECTION GASTRONOMIA-->
    <section class="container-fluid section-bg-1">
        <div class="container p-5">
            <div class="row">
                <div class="col text-center">
                    <h2>ACREDITAMOS QUE A GASTRONOMIA É A MELHOR FORMA DE EXPRESSÃO</h2>
                    <p class="">É ATRAVÉS DELA QUE AS PESSOAS PODEM CONHECER O MUNDO E A SI MESMAS </p>
                          <div class="pt-5">
                            <a href="/sobre" class="btn btn-lg btn-outline-danger ">SAIBA MAIS</a>
                          </div>
                </div>
            </div>
        </div>
    </section>
<!--END SECTION GASTRONOMIA-->

<!--PRODUTOS-->
    <div class="container p-5 text-center">
      <h2 class="">PRODUTOS</h2>
      <hr class="hr-25 bg-black"><span>CONHEÇA</span><hr class="hr-25 bg-black">
      <div class="row">
        <div class="col-lg col-md-4 m-5"><a href="/produtos" class="d-block"><img class="img-fluid" src="img/pasta-de-berinjela.png" alt="imagem pasta de beringela"><span class="description"> PASTA DE BERINGELA</span></a></div>
        <div class="col-lg col-md-4 m-5"><a href="/produtos" class="d-block"><img class="img-fluid" src="img/tomate-seco.png" alt="imagem tomate seco"><span class="description">TOMATE SECO </span></a></div>
        <div class="col-lg col-md-4 m-5"><a href="/produtos" class="d-block"><img class="img-fluid" src="img/molho-tomate.png" alt="imagem molho de tomate"><span class="description">MOLHO DE TOMATE </span></a></div>
      </div>
    </div>
<!-- END PRODUTOS-->

<!--CONTATO-->
 <?php include_once "template-parts/content-contato.php" ?>
<!-- FIM CONTATO-->

<!-- Map Section -->
  <?php include_once "template-parts/mapa.php" ?>
<!-- Map Section -->

<!-- FOOTER-->
<?php include_once "template-parts/footer.php" ?>
<!-- END FOOTER-->
<script src="js/custom.js"></script>
</body>
</html>