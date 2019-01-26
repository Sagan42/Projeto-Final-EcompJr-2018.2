<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../../vendor/bootstrap-4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../../assets/css/crud.css" />

    <script src="main.js"></script>
</head>

<body>
    <?php require_once 'process.php'; ?>

    <?php
        if (isset($_SESSION['message'])):
    ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>

    <?php
        endif;
    ?>

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'login') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM crud") or die($mysqli->error);
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <table class="thead-dark">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th colspan="2">Escolha</th>
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
                    <td>
                        <a href="crud.php?edit=<?php echo $row['data_id']; ?>"
                            class="btn btn-info">Editar</a>
                        <a href="process.php?delete=<?php echo $row['data_id']?>"
                            class="btn btn-danger">Deletar</a>

                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <div class="row justify-content-center">
            <form action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <br>
                    <br>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Nome a ser cadastrado">
                </div>
                <div class="form-group">
                    <input type="text" name="office" class="form-control" value="<?php echo $office; ?>" placeholder="Respectivo cargo">
                </div>
                <div class="form-group">
                <?php
                    if($update == true):
                ?>
                    <button type="submit" class="btn btn-info" name='update'>Atualizar</button>
                <?php
                    else:
                ?>
                    <button type="submit" class="btn btn-primary" name="save">Salvar</button>
                <?php
                    endif;
                ?>
                </div>
            </form>
        </div>
    </div>

</body>

</html>