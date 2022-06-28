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
    <a href="orcamanto_muro.php?tipo=1"><img src="imagens/Muro.jpg" alt="">Muro</a>
    <a href="orcamanto_laje.php?tipo=2"><img src="imagens/Laje.png" alt="">Laje</a>
    <a href="orcamanto_telhado.php?tipo=3"><img src="imagens/Telhado.jpg" alt="">Telhado</a>
    <a href="orcamanto_piscina.php?tipo=4"><img src="imagens/piscina.jpg" alt="">Piscina</a>
    <a href="orcamanto_reserv_cil.php?tipo=5"><img src="imagens/reservatorio.jpg" alt="">Cilindrico Reservatório</a>
</nav>
<a href="tabela.php" class="link">Tabela de Calculo de Superficies</a>
</body>
</html>
