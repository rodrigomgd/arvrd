<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    <title>Produtos - Aura Verde</title>
</head>
<body>

<!--Menu -->
  <?php include_once "template-parts/menu.php" ?>
<!--End Menu -->

<!--HEADER -->
<section class="container-fluid section-bg-1">
        <div class="container p-5 text-center">
            <div class="p-5">
                <img src="img/ramo.png" alt="Logo ramo" class="img-fluid">
                <h2>PRODUTOS</h2>
                <hr class="hr-25"><span class="subtitle"> CONHEÇA </span> <hr class="hr-25">
            </div>
        </div>
    </section>
<!--/HEADER -->

<!--PRODUTOS -->


        <div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="img/pasta-de-berinjela.png" alt="Produto">
                            </div>
                            <div class="col-md-6">
                                <h2>PASTA DE BERINJELA</h2>
                                <p>INGREDIENTES</p>
                                <p>BERINJELA, TOMATE ITALIANO, CEBOLA, PIMENTÃO VERDE, AZEITONA, ORÉGANO, PASTA DE ALHO (SAL E ALHO) E AZEITE DE OLIVA.</p>
                                <p>NÃO CONTÉM GLÚTEN.</p>
                                <p>150G</p>
                                <a href="#" class="btn btn-outline-danger">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

<!--./PRODUTOS -->

<!--CONTATO-->
 <?php include_once "template-parts/contato.php" ?>
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