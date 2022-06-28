<?php

file_exists('conexao.php')? require_once 'conexao.php': '';

$sql = "select cs.desc_calc, t.nome_tipo, v.manta3desc, v.manta3alum, v.manta2morpl, v.plastipegante, v.diplas, v.mao_obra from valores v join calc_superficie cs on cs.id_calc = v.calc_superficie_id_calc join tipo t on t.cod_tipo = cs.tipo_cod_tipo";

$resultado = mysqli_query($con,$sql);

if (!$resultado){
    echo 'tabela Vazia';
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Tipos de Superfícies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="cabecalho">
    <h1>Tabela de Tipos de Superfícies</h1>
    <a href="index.php"><img src="imagens/home.svg" alt=""></a>
</header>

<table style = " width: 90%; margin:0 auto; border:2px solid black;margin-top:20px;">
<thead>
<th>Tipo
</th>
<th>Descrição
</th>
<th>Manta 3mm Desc
</th>
<th>Manta 3mm Alum
</th>
<th>Manta 2mm Morpl
</th>
<th>Plastipegante
</th>
<th>Diplas
</th>
<th>Mão de Obra
</th>
</thead>
<?php
    $cont = 1;
    foreach ($resultado as $linha){
        if ($cont % 2 == 0){
            echo "<tr style='background-color:#ccc'>
            <td>".$linha['nome_tipo']."</td>
            <td>".$linha['desc_calc']."</td>
            <td>".$linha['manta3desc']."</td>
            <td>".$linha['manta3alum']."</td>
            <td>".$linha['manta2morpl']."</td>
            <td>".$linha['plastipegante']."</td>
            <td>".$linha['diplas']."</td>
            <td>".$linha['mao_obra']."</td></tr>";
}
        else{
            echo "<tr style='background-color:#eee'>
            <td>".$linha['nome_tipo']."</td>
            <td>".$linha['desc_calc']."</td>
            <td>".$linha['manta3desc']."</td>
            <td>".$linha['manta3alum']."</td>
            <td>".$linha['manta2morpl']."</td>
            <td>".$linha['plastipegante']."</td>
            <td>".$linha['diplas']."</td>
            <td>".$linha['mao_obra']."</td></tr>";
        }
        $cont++;
    }
?>
</table>
