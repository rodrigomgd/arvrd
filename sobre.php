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
  
    <title>Sobre nós - Aura Verde</title>
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
                <h2>SOBRE NÓS</h2>
                <hr class="hr-25"><span class="subtitle"> CONHEÇA </span> <hr class="hr-25">
            </div>
        </div>
    </section>
<!--/HEADER -->

<!-- O QUE NOS INSPIRA-->
  <?php include_once "template-parts/o-que-nos-inspira.php" ?>
<!--END  O QUE NOS INSPIRA-->

<!--PROPÓSITO -->

    <section class="container-fluid section-bg-1">
        <div class="container p-5 text-center">
            <div class="p-5">
                <h2>PROPÓSITO</h2>
                <hr class="hr-25"><span class="subtitle"> CONHEÇA </span> <hr class="hr-25">
                <div class="row p-5">
                <p>
                    ASSIM COMO TUDO NA VIDA, PRA ALGO COMEÇAR É PRECISO DAR O PRIMEIRO PASSO. O NOSSO COMEÇOU QUANDO DECIDIMOS LARGAR TUDO PARA CORRER ATRÁS DOS NOSSOS SONHOS. NÃO QUERÍAMOS APENAS FAZER MOLHOS E ANTEPASTOS, QUERÍAMOS FAZER PARTE DOS MOMENTOS DAS PESSOAS. OS PRODUTOS AURA VERDE SURGIRAM DA VONTADE DE INSTIGAR AS PESSOAS A EXPRESSAR O QUE ELAS TÊM DE MELHOR E FAZER COM QUE ELAS CURTISSEM CADA MOMENTO COMO SE FOSSE O ÚNICO, ATRAVÉS DA GASTRONOMIA.
                </p>
                <p>
                    NOSSOS PRODUTOS FORAM PENSADOS PARA QUE VOCÊ PUDESSE JOGAR SUA CRIATIVIDADE EM CIMA DELES, INVENTANDO PRATOS, RECEITAS E MAIS O QUE BEM ENTENDESSE. QUEREMOS OFERECER A VOCÊ A POSSIBILIDADE DA DESCOBERTA E A EXPERIÊNCIA DE DESFRUTAR CADA INSTANTE, SEJA ELE RESERVADO OU COM A GALERA.
                </p>
                </div>
            </div>
        </div>
    </section>

<!--./PROPÓSITO -->

<!-- GRID MISSAO-VISAO-VALORES -->

<div class="container p-5">
    <div class="row text-center">
        <div class=" col-lg col-md-4 col-sm m-5">
            <img src="img/mission.png" class="img-fluid p-5" alt="imagem missão">
            <h3 class="mb-3 underlined-title">MISSÃO</h3>
            <p>PROPORCIONAR A OPÇÃO DE UM ALIMENTO SABOROSO E RESPONSÁVEL PARA O CONSUMIDOR.</p>
        </div>
        <div class=" col-lg col-md-4 col-sm m-5">
            <img src="img/vision.png" class="img-fluid p-5" alt="imagem visão">
            <h3 class="mb-3 underlined-title">VISÃO</h3>
            <p>ACREDITAMOS QUE A GASTRONOMIA É A MELHOR FORMA DE EXPRESSÃO. É ATRAVÉS DELA QUE AS PESSOAS PODEM CONHECER O MUNDO E A SI MESMAS.</p>
        </div>
        <div class=" col-lg col-md-4 col-sm m-5">
            <img src="img/care.png" class="img-fluid p-5" alt="imagem valores">
            <h3 class="mb-3 underlined-title">VALORES</h3>
            <p>AGROECOLÓGICO, COLETIVO E SUSTENTÁVEL.</p>
        </div>
    </div>
</div>

<!-- ./GRID MISSAO-VISAO-VALORES -->

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