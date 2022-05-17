<?php
    require_once "funcoes.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Orçamentos</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<header class="cabecalho">
    <h1>Orçamento de Telhado</h1>
    <a href="index1.html"><img src="imagens/home.svg" alt=""></a>
</header>

<form class="formulario" method="post">

    <div id="container1">

        <div>

            <label>
                Nome
                <input type="text" id="nome" required>
            </label>

            <label>
                Endereço
                <input type="text" id="endereco" required>
            </label>
        </div>

        <div id="local">
            <label>
                Telefone
                <input type="tel" id="telefone" required>
            </label>

            <label>
                Cidade
                <input type="text" id="cidade" required>
            </label>

            <label>
                Estado
                <input type="text" id="estado" required>
            </label>

        </div>

        <div id="calculo">
            <label>
                Largura
                <input type="number" step="0.01" id="largura" name="largura" required>
            </label>

            <label>
                Comprimento
                <input type="number" step="0.01" id="comprimento" name="comprimento" required>
            </label>

            <label for="">
                &nbsp;
                <input class="btn" type="submit" value="Calcular" name="btn">
            </label>
        </div>
    </div>
</form>

<fieldset>
    <legend>
        Resultado
    </legend>

    <div id="res2">
        <?php
        if (!isset($_POST['btn'])){
            echo "Insira os dados acima e clique em calcular.";
        }
        else{
            echo "A área total é de: ".$area_total;
        }
        ?>
    </div>
</fieldset>
</body>

</html>
