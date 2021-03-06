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
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="cabecalho">
    <h1>Orçamento de Laje</h1>
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
        <input type="number" step="0.01" id="largura2" required>
      </label>

      <label>
        Comprimento
        <input type="number" step="0.01" id="comprimento2" required>
      </label>

      <label>
        Tipo
        <select name="" id="tipo">
          <option value="exposta">Exposta</option>
          <option value="protegida">Protegida</option>
        </select>
      </label>

      <label for="">
        &nbsp;
        <input class="btn" type="submit" value="Calcular">
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
      Insira os dados acima e clique em calcular.
    </div>
  </fieldset>


  <script>
    var cidade = window.document.getElementById('cidade')
    var cidade = window.document.getElementById('endereco')
    var cidade = window.document.getElementById('estado')
    var cidade = window.document.getElementById('telefone')
   
  
   


    function multiplicar() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      var tipo = window.document.getElementById("tipo");
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1

      if (tipo.value == "exposta") {
        if (area_total <= 20) {
          multiplicar20MenosExposta();
        }
        if (area_total > 20 && area_total < 50) {
          multiplicar50MenosExposta();
        }
        if (area_total >= 50) {
          multiplicar50MaisExposta();
        }
      }

      if (tipo.value == "protegida") {
        if (area_total <= 20) {
          multiplicar20MenosProtegida();
        }
        if (area_total > 20 && area_total < 50) {
          multiplicar50MenosProtegida();
        }
        if (area_total >= 50) {
          multiplicar50MaisProtegida();
        }
      }


    }


    function multiplicar50MenosProtegida() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1


      const manta3mmDesc = 557
      const manta3mmAlum = 624
      const manta2mmMorpl = 641
      const plastipegante = 412
      const diplas = 93
      const maoDeObra = 42





      // Área com manta 3mm Desc
      var qtdMantaMorter = (area_total * 1.10 / 7)
      var qtdPlastipegante = qtdMantaMorter / 10
      var qtdDiplas = qtdMantaMorter / 10
      var totalprod = qtdMantaMorter * manta3mmDesc + qtdPlastipegante * plastipegante + qtdDiplas * diplas
      var totalMaodeObra = area_total * maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorter.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var qtdDi = qtdDiplas.toFixed(2)
      var totalVlManta = qtdMantaMorter * manta3mmDesc
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlDiplas = qtdDiplas * diplas
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morteplas 3 mm 1,10 x 7 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Plastipegante ${totalVlPlastipeganteform}</p> <p> ${qtdDi} Sacos de Argamassa Extra Forte Diplas ${totalVlDiplasform} </p> <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`




    }


    function multiplicar50MenosExposta() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var name = String(nome.value)
      var tel = Number(telefone.value)
      var end = String(endereco.value)
      var cidade1 = String(cidade.value)
      var est = String(estado.value)
      
      
      var area_total = l1 * c1
      
      


      const manta3mmDesc = 557
      const manta3mmAlum = 624
      const manta2mmMorpl = 641
      const plastipegante = 412
      const diplas = 93
      const maoDeObra = 42





      // Área com manta 3mm Desc
      var qtdMantaMorter = (area_total * 1.15 / 7)
      var qtdPlastipegante = qtdMantaMorter / 10
      var qtdDiplas = qtdMantaMorter / 10
      var totalprod = qtdMantaMorter * manta3mmAlum + qtdPlastipegante * plastipegante
      var totalMaodeObra = area_total * maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorter.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var qtdDi = qtdDiplas.toFixed(2)
      var totalVlManta = qtdMantaMorter * manta3mmAlum
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlDiplas = qtdDiplas * diplas
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


      res2.innerHTML = `Nome: ${name} </p> Endereço: ${end}</p> Cidade: ${cidade1} </p> Estado: ${est} </p> Telefone: ${tel} </p> A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas Alumínio 3 mm 1,10 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`




    }


    function multiplicar20MenosExposta() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1


      const manta3mmDesc = 557
      const manta3mmAlum = 624
      const manta2mmMorpl = 641
      const plastipegante = 412
      const diplas = 93
      const maoDeObra = 800





      // Área com manta 3mm Desc
      var qtdMantaMorter = (area_total * 1.15 / 7)
      var qtdPlastipegante = qtdMantaMorter / 10
      var qtdDiplas = qtdMantaMorter / 10
      var totalprod = qtdMantaMorter * manta3mmAlum + qtdPlastipegante * plastipegante
      var totalMaodeObra = maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorter.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var qtdDi = qtdDiplas.toFixed(2)
      var totalVlManta = qtdMantaMorter * manta3mmAlum
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlDiplas = qtdDiplas * diplas
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas Alumínio 3 mm 1,10 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`



    }

    function multiplicar50MaisProtegida() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1

      const manta3mmDesc = 376.16
      const manta3mmAlum = 422.43
      const manta2mmMorpl = 435.50
      const plastipegante = 279.73
      const diplas = 61.85
      const maoDeObra = 42




      // Área com manta 3mm Desc
      var qtdMantaMorter = Math.ceil(area_total * 1.10 / 7)
      var qtdPlastipegante = Math.ceil(qtdMantaMorter / 10)
      var qtdDiplas = Math.ceil(qtdMantaMorter / 10)
      var totalprod = qtdMantaMorter * manta3mmDesc + qtdPlastipegante * plastipegante + qtdDiplas * diplas
      var totalMaodeObra = area_total * maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorter.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var qtdDi = qtdDiplas.toFixed(2)
      var totalVlManta = qtdMantaMorter * manta3mmDesc
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlDiplas = qtdDiplas * diplas
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morteplas 3 mm 1,10 x 7 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p> <p> ${qtdDi} Sacos de Argamassa Extra Forte Diplas ${totalVlDiplasform} </p> <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`



    }

    function multiplicar50MaisExposta() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1

      const manta3mmDesc = 376.16
      const manta3mmAlum = 422.43
      const manta2mmMorpl = 435.50
      const plastipegante = 279.73
      const diplas = 61.85
      const maoDeObra = 42




      // Área com manta 3mm Desc
      var qtdMantaMorter = Math.ceil(area_total * 1.15 / 7)
      var qtdPlastipegante = Math.ceil(qtdMantaMorter / 10)
      var qtdDiplas = Math.ceil(qtdMantaMorter / 10)
      var totalprod = qtdMantaMorter * manta3mmAlum + qtdPlastipegante * plastipegante
      var totalMaodeObra = area_total * maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorter.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var qtdDi = qtdDiplas.toFixed(2)
      var totalVlManta = qtdMantaMorter * manta3mmAlum
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlDiplas = qtdDiplas * diplas
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas Alumínio 3 mm 1 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`



    }

    function multiplicar20MenosProtegida() {
      var med1 = window.document.getElementById('largura2')
      var med2 = window.document.getElementById('comprimento2')
      var l1 = Number(med1.value)
      var c1 = Number(med2.value)
      var area_total = l1 * c1


      const manta3mmDesc = 557
      const manta3mmAlum = 624
      const manta2mmMorpl = 641
      const plastipegante = 412
      const diplas = 93
      const maoDeObra = 800





      // Área com manta 3mm Desc
      var qtdMantaMorter = (area_total * 1.10 / 7)
      var qtdPlastipegante = qtdMantaMorter / 10
      var qtdDiplas = qtdMantaMorter / 10
      var totalprod = qtdMantaMorter * manta3mmDesc + qtdPlastipegante * plastipegante + qtdDiplas * diplas
      var totalMaodeObra = maoDeObra
      var totalOrcamento = totalprod + totalMaodeObra
      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var qtdman = qtdMantaMorter.toFixed(2)
      var qtdPl = qtdPlastipegante.toFixed(2)
      var qtdDi = qtdDiplas.toFixed(2)
      var totalVlManta = qtdMantaMorter * manta3mmDesc
      var totalVlPlastipegante = qtdPlastipegante * plastipegante
      var totalVlDiplas = qtdDiplas * diplas
      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas 3 mm 1,10 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p> <p> ${qtdDi} Sacos de Argamassa Extra Forte Diplas ${totalVlDiplasform} </p> <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`



    }
  </script>


</body>

</html>