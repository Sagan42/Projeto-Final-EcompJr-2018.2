<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>register_index</title>
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/bootstrap-4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/register_index.css" />
    <script src="main.js"></script>

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

<body>
    <div class="title">
        <h1>Sistema de Cadastro</h1>
        <h2>FISICJR</h2> <br>
    </div>

    <div class="container">
        <?php
        if(isset($_SESSION['status_cadastro'])):
    ?>
        <div class="notification is-success">
            <div class="notification">
                <div class="alert alert-success" role="alert">
                    <p>Cadastro efetuado!</p>
                    <p>Faça login informando o seu usuário e senha <a href="login_index.php">aqui</a></p>
                </div>
            </div>
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
    ?>

        <?php
        if(isset($_SESSION['usuario_existe'])):
    ?>
        <div class="notification is-info">
            <div class="notification">
                <div class="alert alert-danger" role="alert">
                    <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                </div>
            </div>
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
    ?>
    </div>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <form action="back/php/register/register.php" method="POST">
                <div class="form-group">
                    <input name="nome" type="text" class="form-control" placeholder="Seu Nome" autofocus> <br>
                    <input name="usuario" type="text" class="form-control" placeholder="Seu Usuário"> <br>
                    <input name="senha" class="form-control" type="password" placeholder="Sua Senha">
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
            </form>
        </div>

    </div>
</body>

</html>