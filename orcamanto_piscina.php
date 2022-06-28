<?php

if (isset($_GET['tipo'])){
  $tipo = $_GET['tipo'];
}
?>
<?php
file_exists('conexao.php') ? require_once 'conexao.php' : '';
file_exists('funcoes.php') ? require_once 'funcoes.php' : '';
    $id_sup = 4;
if (isset($_POST['calcular'])) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $largura = $_POST['largura2'];
    $comprimento = $_POST['comprimento2'];
    $profundidade = $_POST['profundidade'];

    //inicio dos calculos

    $prof = $profundidade * 0.1;
    $area_total = ($largura * $prof) * 2 + ($comprimento * $prof) * 2 + ($largura * $comprimento);

    if (($area_total > 20) && ($area_total < 50)) {
        $calc = 17;
    } else {
        if ($area_total <= 20) {
            $calc = 19;
        } else {
            $calc = 18;
        }
    }
    $sql = "Select * from valores where calc_superficie_tipo_cod_tipo = ".$id_sup." and calc_superficie_id_calc =". $calc;
    $valores = mysqli_query($con, $sql);
    $linhas = mysqli_num_rows($valores);
    if ($linhas == 1) {
        $res = mysqli_fetch_array($valores);
        $manta3desc = $res[3];
        $manta3alum = $res[4];
        $manta2mm = $res[5];
        $plastipegante = $res[6];
        $diplas = $res[7];
        $mao_obra = $res[8];
        $res = calcular($area_total, $manta3desc, $manta3alum, $manta2mm, $plastipegante, $diplas, $mao_obra);
    }
}


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
    <h1>Orçamento de Piscina</h1>
    <a href="index.php"><img src="imagens/home.svg" alt=""></a>

</header>

<form class="formulario" method="post">
    <div id="container1">

        <div>

            <label>
                Nome
                <input type="text" id="nome" name="nome" required>
            </label>

            <label>
                Endereço
                <input type="text" id="endereco" name="endereco" required>
            </label>
        </div>

        <div id="local">
            <label>
                Telefone
                <input type="tel" id="telefone" name="telefone" required>
            </label>

            <label>
                Cidade
                <input type="text" id="cidade" name="cidade" required>
            </label>

            <label>
                Estado
                <input type="text" id="estado" name="estado" required>
            </label>

        </div>

        <div id="calculo">
            <label>
                Largura
                <input type="number" step="0.01" id="largura2" name="largura2" required>
            </label>

            <label>
                Comprimento
                <input type="number" step="0.01" id="comprimento2" name="comprimento2" required>
            </label>

            <label for="">
                Profundidade
                <input type="number" step="0.01" id="profundidade" name="profundidade" required>
            </label>

            <label for="">
                &nbsp;
                <input class="btn" type="submit" name="calcular" value="Calcular">
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
        if (empty($res)){
            echo 'Insira os dados acima e clique em calcular.';
        }
        else
            {
                echo $res;
            }

        ?>
    </div>
</fieldset>



  </body>

</html>
