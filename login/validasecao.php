<?php
    
    session_start();
    include_once('../teste.php');

    if(!isset($_SESSION['usuario'])){
        header('location: login.php');
        exit();
    }
?>