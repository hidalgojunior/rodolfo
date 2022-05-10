<?php

    require_once 'funcoes.php';

if (isset($_POST['botao'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $largura = $_POST['largura2'];
    $comprimento = $_POST['comprimento2'];
    $tipo = $_POST['tipo'];
    $area = multiplicar($largura, $comprimento, $tipo);
    
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
    <h1>Orçamento de Laje</h1>
    <a href="index.html"><img src="imagens/home.svg" alt=""></a>
  </header>

  <form class="formulario" method="POST">
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
          <input type="text" id="cidade" required name="cidade">
        </label>

        <label>
          Estado
          <input type="text" id="estado" required name="estado">
        </label>

      </div>

   


    <div id="calculo">
      
      <label>
        Largura
        <input type="number" step="0.01" id="largura2" required name="largura2">
      </label>

      <label>
        Comprimento
        <input type="number" step="0.01" id="comprimento2" required name="comprimento2">
      </label>

      <label>
        Tipo
        <select name="tipo" id="tipo" >
          <option value="exposta">Exposta</option>
          <option value="protegida">Protegida</option>
        </select>
      </label>

      <label for="">
        &nbsp;
        <input class="btn" type="submit" value="Calcular" name="botao">
      </label>
    </div>

    </div>
  </div>

  </form>

  <fieldset>
    <legend>
      Resultado
    </legend>

    <div id="res2">
      <?php echo (!isset($area)? "Insira os dados acima e clique em calcular" : $area); ?>
    </div>
  </fieldset>