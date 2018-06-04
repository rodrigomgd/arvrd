<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png" />
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
        <?php $produtos = json_decode(file_get_contents('json/produtos.json'),true); 
              $i = 0;  ?>

        <div id="ProductCarousel" class="carousel slide pt-5 mt-5 pb-3" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach($produtos as $produto) : ?>
                <div class="carousel-item <?= $active = ($i==0) ? "active" : "" ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img class="img-fluid" src="<?= $produto['img'] ?>" alt="Produto">
                            </div>
                            <div class="col-md-5 pt-3 text-justify">
                                <h2><?= $produto['nome'] ?></h2>
                                <p>INGREDIENTES</p>
                                <p><?= $produto['ingredientes'] ?></p>
                                <p><?= $produto['obs'] ?></p>
                                <p><?= $produto['peso'] ?></p>
                                <a href="<?= $produto['url'] ?>" class="btn btn-outline-danger pl-5 pr-5">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
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
        <div class="container pt-5 f-ChaletComprime text-center">
            <h2>MAIS PRODUTOS</h2>
            <div class="row justify-content-around pr-4 pl-4">
                <?php $i=0; foreach($produtos as $produto) : ?>
                <div data-target="#ProductCarousel" data-slide-to= <?= $i ?> class="img-product-col position-relative mb-5">
                <img src="<?= $produto['img'] ?>" class="img-fluid" alt="imagem de produto">
                <span class="img-product-name"><?= $produto['nome'] ?></span>
                </div>
            <?php $i++; endforeach; ?>
            </div>
        </div>
<!--./PRODUTOS -->

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