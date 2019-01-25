<?php
session_start();
include('verifica_login.php');
?>

<h1>Bem vindo, <?php echo $_SESSION['nome'];?></h1>
<a href="../../../main.php">Voltar para site</a>

<h2><a href="logout.php">Sair</a></h2>