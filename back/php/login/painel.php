<?php
session_start();
include('verifica_login.php');
?>

<h1>Bem vindo, <?php echo $_SESSION['nome'];?></h1>
<a href="../../../main.php">Voltar para site</a>

<?php
    if($_SESSION['nome'] == 'Master'):
?>

<br>
<br>
<a href="../crud/crud.php">Acessar CRUD</a>

<?php
    endif;
?>

<h2><a href="logout.php">Sair</a></h2>