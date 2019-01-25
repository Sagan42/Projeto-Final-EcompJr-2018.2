<?php
session_start();
include('../conexao.php');

$name = mysqli_real_escape_string($conexao, trim($_POST['name']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$subject = mysqli_real_escape_string($conexao, trim($_POST['subject']));
$message = mysqli_real_escape_string($conexao, trim($_POST['message']));

$sql = "INSERT INTO _message (nome, email, subject_info, message_content) VALUES ('$name', '$email', '$subject', '$message')";

$conexao->query($sql) === TRUE;

$conexao->close();

exit;

?>