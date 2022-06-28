<?php

if (isset($_GET['tipo'])){
  $tipo = $_GET['tipo'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Orçamentos</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="cabecalho">
    <h1>Orçamento de Telhado</h1>
    <a href="index.php"><img src="imagens/home.svg" alt=""></a>
  </header>

  <form class="formulario" onsubmit="event.preventDefault(); multiplicar();">
   
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
      <input type="number" step="0.01" id="largura" required>
    </label>

    <label>
      Comprimento
      <input type="number" step="0.01" id="comprimento" required>
    </label>

    <label for="">
      &nbsp;
      <input class="btn" type="submit" value="Calcular">
    </label>
  </div>
 </div>
  </form>

  <fieldset>
    <legend>
      Resultado
    </legend>

    <div id="res2">
      Insira os dados acima e clique em calcular.
    </div>
  </fieldset>


  <script>


    function multiplicar() {
      var med1 = window.document.getElementById('largura')
      var med2 = window.document.getElementById('comprimento')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = (l1 * c1)

      if (area_total < 50 && area_total > 20) {
        multiplicar50Menos();

      } else if (area_total <= 20) {
        multiplicar20Menos();

      } else {
        multiplicar50Mais();
      }


    }


    function multiplicar50Menos() {
      var med1 = window.document.getElementById('largura')
      var med2 = window.document.getElementById('comprimento')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1


     const manta3mmDesc = 557
      const manta3mmAlum = 624
      const manta2mmMorpl = 641
      const plastipegante = 412
      const diplas = 93
      const maoDeObra = 42 * 1.3





     
     // Área com manta 3mm Desc
      var qtdMantaMorpl = (area_total * 1.30) * 1.10 / 10
      var qtdPlastipegante = qtdMantaMorpl / 10
      var totalprod = qtdMantaMorpl * manta2mmMorpl + qtdPlastipegante * plastipegante 
      var totalMaodeObra = maoDeObra * area_total
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorpl.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var totalVlManta = qtdMantaMorpl * manta2mmMorpl
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morplava Alumínio 2 mm 1,10 x 10 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`




    }


    function multiplicar50Mais() {
        var med1 = window.document.getElementById('largura')
      var med2 = window.document.getElementById('comprimento')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1


     const manta3mmDesc = 624
      const manta3mmAlum = 669
      const manta2mmMorpl = 419.17
      const plastipegante = 279.73
      const diplas = 61.85
      const maoDeObra = 42 * 1.3





     
     // Área com manta 3mm Desc
      var qtdMantaMorpl = Math.ceil((area_total * 1.30) * 1.10 / 10)
      var qtdPlastipegante = Math.ceil(qtdMantaMorpl / 10)
      var totalprod = Math.ceil(qtdMantaMorpl * manta2mmMorpl + qtdPlastipegante * plastipegante) 
      var totalMaodeObra = maoDeObra * area_total
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorpl.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var totalVlManta = qtdMantaMorpl * manta2mmMorpl
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morplava Alumínio 2 mm 1,10 x 10 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`




    }


    function multiplicar20Menos() {
        var med1 = window.document.getElementById('largura')
      var med2 = window.document.getElementById('comprimento')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1


     const manta3mmDesc = 624
      const manta3mmAlum = 669
      const manta2mmMorpl = 641
      const plastipegante = 412
      const diplas = 93
      const maoDeObra = 800 





     
     // Área com manta 3mm Desc
      var qtdMantaMorpl = (area_total * 1.30) * 1.10 / 10
      var qtdPlastipegante = qtdMantaMorpl / 10
      var totalprod = qtdMantaMorpl * manta2mmMorpl + qtdPlastipegante * plastipegante 
      var totalMaodeObra = maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorpl.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var totalVlManta = qtdMantaMorpl * manta2mmMorpl
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });



      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morplava Alumínio 2 mm 1,10 x 10 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`



    }



  </script>

</body>

</html>
