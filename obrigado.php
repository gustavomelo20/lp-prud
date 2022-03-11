<?php
include_once "./includes/config.php";
$robots = "noindex, follow";
?>

<!doctype html>
<html lang="pt-br">

<head>
    <?php include_once "./includes/head.php"; ?>

    <style>
        #cta {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
    include_once "./includes/body.php";
    include_once "./templates-parts/header.php";
    ?>
  
    <section id="obrigado">
        <div class="container">
            <h1>Muito Obrigado!</h1>
            <p>Um de nossos consultores recebeu o seu e-mail <br>e entrará em contato com você o mais rápido possível.</p>
        </div>
    </section>



    <script src="./assets/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700" rel="stylesheet"></body>
</html>