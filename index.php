<?php
    file_exists('conexao.php') ? require_once 'conexao.php' : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Orçamentos</title>
</head>
<body class="home">

<h1>Calculadora de Orçamentos</h1>

<nav class="menu">
    <a href="orcamanto_muro.php"><img src="imagens/Muro.jpg" alt="">Muro</a>
    <a href="orcamanto_laje.php"><img src="imagens/Laje.png" alt="">Laje</a>
    <a href="orcamanto_telhado.php"><img src="imagens/Telhado.jpg" alt="">Telhado</a>
    <a href="orcamanto_piscina.php"><img src="imagens/piscina.jpg" alt="">Piscina</a>
    <a href="orcamanto_reserv_cil.php"><img src="imagens/reservatorio.jpg" alt="">Cilindrico Reservatório</a>
</nav>

</body>
</html>
