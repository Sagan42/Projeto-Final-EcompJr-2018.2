<?php
if(!$_SESSION['nome']){
    header('Location:../../../login_index.php');
    exit();
}