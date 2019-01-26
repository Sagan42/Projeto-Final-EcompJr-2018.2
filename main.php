<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FisicJr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/bootstrap-4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />

    <script src="assets/js/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.1.1/js/bootstrap.min.js"></script>

    <!-- Ícone da aba -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#DA0509">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#DA0509">
    <!-- Ícone da aba -->
</head>


<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <ul class="ml-5">
            <a class="navbar-brand" href="main.php">FISICJR</a>
        </ul>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='#services'>Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='#member'>Membros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='#partner'>Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='#contact'>Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_index.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<body>
    <section class="header-site">
        <div class="container">
            <div class="col-xs-12">
                <img class="centralImageLogoStart" src="assets/img/logoWhite.png">

                <div class="positionDesc">
                    <h1 class="text-center">EMPRESA JÚNIOR DE FÍSICA DA UEFS</h1> <br>

                    <p class="text-center">
                        <a onclick="location.href = '#about';" class="btn btn-dark">
                        <?php 
                            if(isset($_SESSION['nome'])){
                                echo $_SESSION['nome'].',';
                            }
                        ?>
                        Conheça-nos
                        </a>
                    </p>
                </div>

            </div>

        </div>
    </section>

    </section>
    <section class="content-site-about">
        <div class="container">
            <div class="row">
                <div id="about" class="col-xl-12">
                    <h1 class="text-center">Sobre nós</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur
                        lorem
                        ut ipsum viverra blandit. Etiam non ligula non velit facilisis ultricies. Pellentesque tempor
                        urna
                        eget sollicitudin consectetur. Vestibulum vitae mi at ex blandit tempor. Sed ut blandit nibh.
                        Pellentesque in nulla lobortis, elementum neque eget, pulvinar nunc. Integer nec aliquam elit.
                        Donec risus odio, venenatis eget venenatis vitae, tincidunt dignissim neque. Integer quis
                        malesuada
                        augue, non pretium metus.
                        Aenean aliquam lectus sed neque posuere dapibus. Morbi quam massa, molestie at interdum id,
                        eleifend non nisl.</br></br>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">MISSÃO</h3>
                    <p class="text-center">Integer et efficitur augue. Donec et fermentum nulla. Proin pellentesque
                        urna sit amet turpis accumsan, ac gravida est lobortis. Orci varius natoque penatibus et magnis
                        dis parturient montes.</p>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">VISÃO</h3>
                    <p class="text-center">Nascetur ridiculus mus. Nunc justo turpis, mattis sit amet libero non,
                        condimentum condimentum quam. Curabitur posuere urna a rutrum imperdiet. Vivamus non sem nunc.
                        Proin tincidunt eu ligula at rutrum.</p>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">VALORES</h3>
                    <p class="text-center">Vestibulum eu felis ligula. Morbi at ultrices justo. Donec maximus lobortis
                        bibendum. Donec enim ligula, auctor non hendrerit quis, aliquam ac diam. Mauris malesuada
                        lectus metus.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-site-services">
        <img class="centralImage" src="assets/img/logoServices.png" style="position: relative;">
        <div class="container" id="services">
            <div class="row">
                <div class="col-md-3">
                    <div class="serv_i">
                        <p>XXXXXXXXXXXXXXXXXX</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="serv_i">
                        <p>VVVVVVVVVVVVVVVVVV</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="serv_i">
                        <p>AAAAAAAAAAAAAAAAAA</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="serv_i">
                        <p>BBBBBBBBBBBBBBBBBB</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-site-membros">
        <div class="container" id="member">
            <img class="centralImage" src="assets/img/logoMember.png">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/member01.jpg" class="d-block centralImage" alt="Slide Presidente">
                        <div class="carousel-caption text-center">
                            <h1>Diretora Presidente</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="assets/img/member02.jpg" class="d-block centralImage" alt="Slide Vice-Presidente">
                        <div class="carousel-caption text-center">
                            <h1>Diretora Vice-Presidente</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="assets/img/member03.jpg" class="d-block centralImage" alt="Slide Diretor de Recursos Humanos">
                        <div class="carousel-caption text-center">
                            <h1>Diretor de Recursos Humanos</h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="assets/img/member04.jpg" class="d-block centralImage" alt="Slide Diretor de Projetos">
                        <div class="carousel-caption text-center">
                            <h1>Diretor de Projetos</h1>
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
        </div>
        <br>
        <div class="row justify-content-center">
            <script>
                function memberPag() {
                    location.href = "memberPag.php";
                }
            </script>
            <?php
                echo '<button type="button" class="btn btn-dark" onClick="memberPag()">Confira a relação completa de membros</button>';
            ?>
        </div>
    </section>

    <section class="content-site-partner">
        <div class="container" id="partner">
            <img class="centralImage" src="assets/img/logoPartner.png">
            <a target="_blank" href="http://www.ecompjr.com.br/">
                <img class="centralImage" src="assets/img/logoEcompjr.png">

            </a>
        </div>
    </section>

    <section class="content-site-contact">
        <div class="container" id="contact">

            <img class="centralImage" src="assets/img/logoContact.png">
            <img src="assets/img/einstein.png" style="position: absolute;" height="450px" width="450px">

            <div class="row">
                <div class="col-md-4">
                    <div>
                        <h3> Endereço:</h3>
                        UEFS - Avenida Transnordestina, Novo Horizonte,
                        Feira de Santana - BA, 44036-900
                    </div>
                    <div>
                        <h3>Telefone:</h3>
                        (75) 1111-1111
                    </div>
                    <div>
                        <h3>Email:</h3>
                        fisicjr@uefs.br
                    </div>
                    <div>
                        <h3>Horários:</h3>
                        <strong>Segunda</strong> - 7:30 às 17:30<br>
                        <strong>Terça</strong> - 7:30 às 17:30<br>
                        <strong>Quarta</strong> - 7:30 às 18:30<br>
                        <strong>Quinta</strong> - 13:30 às 18:00<br>
                        <strong>Sexta</strong> - 8:00 às 15:30<br><br>
                    </div>
                </div>


                <div class="col-md-6 offset-md-2">
                    <form action="back/php/message/message.php" method="POST" id="formulario">
                        <h2>Deixe sua mensagem</h2>
                        <div class="col-md-8">
                            <label>Nome</label>
                            <input id="name" class="form-control" name="name" type="text" placeholder="Seu nome"
                                required>
                            <label>Email</label>
                            <input id="email" class="form-control" name="email" type="email" placeholder="Seu email"
                                required>
                            <label>Assunto</label>
                            <input id="subject" class="form-control" name="subject" type="text" placeholder="Assunto"
                                required>
                            <label>Mensagem</label>
                            <textarea id="message" class="form-control" name="message" placeholder="Sua mensagem" rows="4"
                                required>
                            </textarea>
                            <br>
                            <button id="send_message" type="submit" class="btn btn-dark">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</body>


<footer>
    <section class="footer-site">
        <div class="container">
            <img class="centralImage" src="assets/img/icon/android-icon-72x72.png">

            <div class="col-xs-12">
                <p class="text-center">Copyright © FISICJR. 2019</p>
            </div>
        </div>
    </section>
</footer>

</html>