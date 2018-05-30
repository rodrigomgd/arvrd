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
        <div id="ProductCarousel" class="carousel slide pt-5 mt-5" data-ride="carousel">
            <div class="carousel-inner">
                <?php for($i=0;$i<5;$i++) : ?>
                <div class="carousel-item <?= $active = ($i==1) ? "active" : "" ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img class="img-fluid" src="img/pasta-de-berinjela.png" alt="Produto">
                            </div>
                            <div class="col-md-5 pt-3 text-justify">
                                <h2>PASTA DE BERINJELA <?= $i ?></h2>
                                <p>INGREDIENTES</p>
                                <p>BERINJELA, TOMATE ITALIANO, CEBOLA, PIMENTÃO VERDE, AZEITONA, ORÉGANO, PASTA DE ALHO (SAL E ALHO) E AZEITE DE OLIVA.</p>
                                <p>NÃO CONTÉM GLÚTEN.</p>
                                <p>150G</p>
                                <a href="#" class="btn btn-outline-danger pl-5 pr-5">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <a class="carousel-control-prev" href="#ProductCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#ProductCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <div class="container pt-5 f-ChaletComprime pb-5 text-center">
            <h2>MAIS PRODUTOS</h2>
            <div class="row justify-content-around m-3">
                <?php for($i=0;$i<5;$i++) : ?>
                <div data-target="#ProductCarousel" data-slide-to= <?= $i ?> class="m-3 img-product-col position-relative">
                <img src="img/pasta-de-berinjela.png" class="img-fluid" alt="imagem de produto">
                </div>
            <?php endfor; ?>
            </div>
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