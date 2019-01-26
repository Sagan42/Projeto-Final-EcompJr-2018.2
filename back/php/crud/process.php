<?php

$mysqli = new mysqli('localhost', 'root', '', 'login') or die(mysqli_error($mysqli));

$id = 0;
$name = '';
$office = '';
$update = false;

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $office = $_POST['office'];

    $mysqli->query("INSERT INTO crud (nome, cargo) VALUES('$name', '$office')") or
            die($mysqli->error);
    
    $_SESSION['message'] =  "Registrado com sucesso!";
    $_SESSION['msg_type'] = "success";

    header("location:crud.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM crud WHERE data_id=$id") or die($mysqli->error());

    $_SESSION['message'] =  "Registro Deletado!";
    $_SESSION['msg_type'] = "danger";

    header("location:crud.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;

    $result = $mysqli->query("SELECT * FROM crud WHERE data_id=$id") or die($mysqli->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $name = $row['nome'];
        $office = $row['cargo'];
    }

}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $office = $_POST['office'];

    $mysqli->query("UPDATE crud SET nome='$name', cargo='$office' where data_id=$id") or die($mysqli->error());

    $_SESSION['message'] =  "Registro atualizado!";
    $_SESSION['msg_type'] = "warning";

    header("location:crud.php");
}