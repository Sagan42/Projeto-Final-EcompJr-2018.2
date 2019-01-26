<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Membros FISICJR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="vendor/bootstrap-4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/memberPag.css" />
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

<header>
    <div class="title">
        FISICJR
        <h3>Membros</h3>
    </div>
</header>

<body>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'login') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM crud") or die($mysqli->error);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <?php
                    while ($row =$result->fetch_assoc()):
                    ?>
                <tr>
                    <td>
                        <?php echo $row['nome']; ?>
                    </td>
                    <td>
                        <?php echo $row['cargo']; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>