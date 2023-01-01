<?php
include_once("config/url.php");
include_once("config/process.php");


//LIMPA A MENSAGEM

if (isset($_SESSION['msg'])) {

    $printMsg = $_SESSION['msg'];

    $_SESSION['msg'] = '';
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>
    <link rel="shortcut icon" href="img/logo.svg" class="">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css" class="">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">

                <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda" alt="Agenda">

            </a>

            <div>

                <div class="navbar-nav">

                    <a href="<?= $BASE_URL ?>index.php" class="nav-link active" id="home-link">Agenda</a>
                    <a href="<?= $BASE_URL ?>create.php" class="nav-link active">Adicionar Contato</a>

                </div>

            </div>
        </nav>

    </header>