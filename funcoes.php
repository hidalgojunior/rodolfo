<?php

  require_once 'conexao.php';


  function multiplicar50Menos($area_total, $manta3D,$manta3A,$manta2M,$plast,$dip,$mo)
  {

    $manta3mmDesc = $manta3D;
    $manta3mmAlum = $manta3A;
    $manta2mmMorpl = $manta2M;
    $plastipegante = $plast;
    $diplas = $dip;
    $maoDeObra = $mo;


    // Área com manta 3mm Desc
    $qtdMantaMorter = ($area_total * 1.10 / 7);
    $qtdPlastipegante = $qtdMantaMorter / 10;
    $qtdDiplas = $qtdMantaMorter / 3.33;
    $totalMaodeObra = $maoDeObra * $area_total;
    $totalprod = $qtdMantaMorter * $manta3mmDesc + $qtdPlastipegante * $plastipegante + $qtdDiplas * $diplas;
    $totalOrcamento = $totalprod + $totalMaodeObra;
    $totalMaodeObraFprmatado = number_format($totalMaodeObra, 2, '.', ',');
    $totalProdFormatado = number_format($totalprod,2,'.',',');
    $totalOrcamentoFormatado = number_format($totalOrcamento,2,'.',',');
    $qtdman = number_format($qtdMantaMorter,2);
    $qtdPl = number_format($qtdPlastipegante,2);
    $qtdDi = number_format($qtdDiplas,2);
    $totalVlManta = $qtdMantaMorter * $manta3mmDesc;
    $totalVlPlastipegante = $qtdPlastipegante * $plastipegante;
    $totalVlDiplas = $qtdDiplas * $diplas;
    $totalVlMantaform = number_format($totalVlManta,2,'.',',');
    $totalVlPlastipeganteform = number_format($totalVlPlastipegante,2,'.',',');
    $totalVlDiplasform = number_format($totalVlDiplas,2,'.',',');


    return $res2 = 'A área deu  Total de '.$area_total.' m2 </p> <p> Irá utilizar: </p> '.$qtdman.' rolos de Manta Asfáltica Morterplas 3 mm 1,10 x 7 Mts '.$totalVlMantaform.'</p> <p> '.$qtdPl.' baldes de Primer Plastipegante '.$totalVlPlastipeganteform.'</p> <p> '.$qtdDi.' Sacos de Argamassa Extra Forte Diplas '.$totalVlDiplasform.' </p> <p> Total de produtos  '.$totalProdFormatado.' </p> <p>Mão de obra '.$totalMaodeObraFprmatado.'</p> Total de '.$totalOrcamentoFormatado.'</p>`;
    }
  
//
//function multiplicar($larg, $comp, $tipo) {
//    $area_total = $larg * $comp;
//    
//    if ($tipo == "exposta") {
//        if ($area_total <= 20) {
//          multiplicar20MenosExposta($area_total);
//        }
//        if ($area_total > 20 && $area_total < 50) {
//          multiplicar50MenosExposta($area_total);
//        }
//        if ($area_total >= 50) {
//          multiplicar50MaisExposta($area_total);
//        }
//      }
//
//      if (tipo.value == "protegida") {
//        if ($area_total <= 20) {
//          multiplicar20MenosProtegida($area_total);
//        }
//        if ($area_total > 20 && $area_total < 50) {
//          multiplicar50MenosProtegida($area_total);
//        }
//        if ($area_total >= 50) {
//          multiplicar50MaisProtegida($area_total);
//        }
//      }
//
//
//    }
//
//
//    function multiplicar50MenosProtegida($area_total) {
//
//      $sql = "select * from valores where cod_tipo = 1";
//      echo $sql;
//    }
//      /*
//      const manta3mmDesc = 557
//      const manta3mmAlum = 624
//      const manta2mmMorpl = 641
//      const plastipegante = 412
//      const diplas = 93
//      const maoDeObra = 42
//
//
//
//
//
//      // Área com manta 3mm Desc
//      var qtdMantaMorter = (area_total * 1.10 / 7)
//      var qtdPlastipegante = qtdMantaMorter / 10
//      var qtdDiplas = qtdMantaMorter / 10
//      var totalprod = qtdMantaMorter * manta3mmDesc + qtdPlastipegante * plastipegante + qtdDiplas * diplas
//      var totalMaodeObra = area_total * maoDeObra
//      var totalOrcamento = totalprod + totalMaodeObra
//      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var qtdman = qtdMantaMorter.toFixed(2)
//      var qtdPl = qtdPlastipegante.toFixed(2)
//      var qtdDi = qtdDiplas.toFixed(2)
//      var totalVlManta = qtdMantaMorter * manta3mmDesc
//      var totalVlPlastipegante = qtdPlastipegante * plastipegante
//      var totalVlDiplas = qtdDiplas * diplas
//      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//
//
//      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morteplas 3 mm 1,10 x 7 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Plastipegante ${totalVlPlastipeganteform}</p> <p> ${qtdDi} Sacos de Argamassa Extra Forte Diplas ${totalVlDiplasform} </p> <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`
//
//
//
//
//    }
//
//
//    function multiplicar50MenosExposta() {
//      var med1 = window.document.getElementById('largura2')
//      var med2 = window.document.getElementById('comprimento2')
//      
//      var l1 = Number(med1.value)
//      var c1 = Number(med2.value)
//      var name = String(nome.value)
//      var tel = Number(telefone.value)
//      var end = String(endereco.value)
//      var cidade1 = String(cidade.value)
//      var est = String(estado.value)
//      
//      
//      var area_total = l1 * c1
//      
//      
//
//
//      const manta3mmDesc = 557
//      const manta3mmAlum = 624
//      const manta2mmMorpl = 641
//      const plastipegante = 412
//      const diplas = 93
//      const maoDeObra = 42
//
//
//
//
//
//      // Área com manta 3mm Desc
//      var qtdMantaMorter = (area_total * 1.15 / 7)
//      var qtdPlastipegante = qtdMantaMorter / 10
//      var qtdDiplas = qtdMantaMorter / 10
//      var totalprod = qtdMantaMorter * manta3mmAlum + qtdPlastipegante * plastipegante
//      var totalMaodeObra = area_total * maoDeObra
//      var totalOrcamento = totalprod + totalMaodeObra
//      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var qtdman = qtdMantaMorter.toFixed(2)
//      var qtdPl = qtdPlastipegante.toFixed(2)
//      var qtdDi = qtdDiplas.toFixed(2)
//      var totalVlManta = qtdMantaMorter * manta3mmAlum
//      var totalVlPlastipegante = qtdPlastipegante * plastipegante
//      var totalVlDiplas = qtdDiplas * diplas
//      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//
//
//      res2.innerHTML = `Nome: ${name} </p> Endereço: ${end}</p> Cidade: ${cidade1} </p> Estado: ${est} </p> Telefone: ${tel} </p> A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas Alumínio 3 mm 1,10 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`
//
//
//
//
//    }
//
//
//    function multiplicar20MenosExposta() {
//      var med1 = window.document.getElementById('largura2')
//      var med2 = window.document.getElementById('comprimento2')
//      var l1 = Number(med1.value)
//      var c1 = Number(med2.value)
//      var area_total = l1 * c1
//
//
//      const manta3mmDesc = 557
//      const manta3mmAlum = 624
//      const manta2mmMorpl = 641
//      const plastipegante = 412
//      const diplas = 93
//      const maoDeObra = 800
//
//
//
//
//
//      // Área com manta 3mm Desc
//      var qtdMantaMorter = (area_total * 1.15 / 7)
//      var qtdPlastipegante = qtdMantaMorter / 10
//      var qtdDiplas = qtdMantaMorter / 10
//      var totalprod = qtdMantaMorter * manta3mmAlum + qtdPlastipegante * plastipegante
//      var totalMaodeObra = maoDeObra
//      var totalOrcamento = totalprod + totalMaodeObra
//      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var qtdman = qtdMantaMorter.toFixed(2)
//      var qtdPl = qtdPlastipegante.toFixed(2)
//      var qtdDi = qtdDiplas.toFixed(2)
//      var totalVlManta = qtdMantaMorter * manta3mmAlum
//      var totalVlPlastipegante = qtdPlastipegante * plastipegante
//      var totalVlDiplas = qtdDiplas * diplas
//      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//
//
//      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas Alumínio 3 mm 1,10 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`
//
//
//
//    }
//
//    function multiplicar50MaisProtegida() {
//      var med1 = window.document.getElementById('largura2')
//      var med2 = window.document.getElementById('comprimento2')
//      var l1 = Number(med1.value)
//      var c1 = Number(med2.value)
//      var area_total = l1 * c1
//
//      const manta3mmDesc = 376.16
//      const manta3mmAlum = 422.43
//      const manta2mmMorpl = 435.50
//      const plastipegante = 279.73
//      const diplas = 61.85
//      const maoDeObra = 42
//
//
//
//
//      // Área com manta 3mm Desc
//      var qtdMantaMorter = Math.ceil(area_total * 1.10 / 7)
//      var qtdPlastipegante = Math.ceil(qtdMantaMorter / 10)
//      var qtdDiplas = Math.ceil(qtdMantaMorter / 10)
//      var totalprod = qtdMantaMorter * manta3mmDesc + qtdPlastipegante * plastipegante + qtdDiplas * diplas
//      var totalMaodeObra = area_total * maoDeObra
//      var totalOrcamento = totalprod + totalMaodeObra
//      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var qtdman = qtdMantaMorter.toFixed(2)
//      var qtdPl = qtdPlastipegante.toFixed(2)
//      var qtdDi = qtdDiplas.toFixed(2)
//      var totalVlManta = qtdMantaMorter * manta3mmDesc
//      var totalVlPlastipegante = qtdPlastipegante * plastipegante
//      var totalVlDiplas = qtdDiplas * diplas
//      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//
//
//      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morteplas 3 mm 1,10 x 7 Mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p> <p> ${qtdDi} Sacos de Argamassa Extra Forte Diplas ${totalVlDiplasform} </p> <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`
//
//
//
//    }
//
//    function multiplicar50MaisExposta() {
//      var med1 = window.document.getElementById('largura2')
//      var med2 = window.document.getElementById('comprimento2')
//      var l1 = Number(med1.value)
//      var c1 = Number(med2.value)
//      var area_total = l1 * c1
//
//      const manta3mmDesc = 376.16
//      const manta3mmAlum = 422.43
//      const manta2mmMorpl = 435.50
//      const plastipegante = 279.73
//      const diplas = 61.85
//      const maoDeObra = 42
//
//
//
//
//      // Área com manta 3mm Desc
//      var qtdMantaMorter = Math.ceil(area_total * 1.15 / 7)
//      var qtdPlastipegante = Math.ceil(qtdMantaMorter / 10)
//      var qtdDiplas = Math.ceil(qtdMantaMorter / 10)
//      var totalprod = qtdMantaMorter * manta3mmAlum + qtdPlastipegante * plastipegante
//      var totalMaodeObra = area_total * maoDeObra
//      var totalOrcamento = totalprod + totalMaodeObra
//      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var qtdman = qtdMantaMorter.toFixed(2)
//      var qtdPl = qtdPlastipegante.toFixed(2)
//      var qtdDi = qtdDiplas.toFixed(2)
//      var totalVlManta = qtdMantaMorter * manta3mmAlum
//      var totalVlPlastipegante = qtdPlastipegante * plastipegante
//      var totalVlDiplas = qtdDiplas * diplas
//      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//
//
//      res2.innerHTML = `A área deu  Total de ${area_total} m2 </p> <p> Irá utilizar: </p> ${qtdman} rolos de Manta Asfáltica Morterplas Alumínio 3 mm 1 x 7 mts ${totalVlMantaform}</p> <p> ${qtdPl} baldes de Primer Plastipegante ${totalVlPlastipeganteform}</p>  <p> Total de produtos  ${totalProdFormatado} </p> <p>Mão de obra ${totalMaodeObraFprmatado}</p> Total de ${totalOrcamentoFormatado}</p>`
//
//
//
//    }
//
//    function multiplicar20MenosProtegida() {
//      var med1 = window.document.getElementById('largura2')
//      var med2 = window.document.getElementById('comprimento2')
//      var l1 = Number(med1.value)
//      var c1 = Number(med2.value)
//      var area_total = l1 * c1
//
//
//      const manta3mmDesc = 557
//      const manta3mmAlum = 624
//      const manta2mmMorpl = 641
//      const plastipegante = 412
//      const diplas = 93
//      const maoDeObra = 800
//
//
//
//
//
//      // Área com manta 3mm Desc
//      var qtdMantaMorter = (area_total * 1.10 / 7)
//      var qtdPlastipegante = qtdMantaMorter / 10
//      var qtdDiplas = qtdMantaMorter / 10
//      var totalprod = qtdMantaMorter * manta3mmDesc + qtdPlastipegante * plastipegante + qtdDiplas * diplas
//      var totalMaodeObra = maoDeObra
//      var totalOrcamento = totalprod + totalMaodeObra
//      var totalMaodeObraFprmatado = totalMaodeObra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalProdFormatado = totalprod.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalOrcamentoFormatado = totalOrcamento.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var qtdman = qtdMantaMorter.toFixed(2)
//      var qtdPl = qtdPlastipegante.toFixed(2)
//      var qtdDi = qtdDiplas.toFixed(2)
//      var totalVlManta = qtdMantaMorter * manta3mmDesc
//      var totalVlPlastipegante = qtdPlastipegante * plastipegante
//      var totalVlDiplas = qtdDiplas * diplas
//      var totalVlMantaform = totalVlManta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlPlastipeganteform = totalVlPlastipegante.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//      var totalVlDiplasform = totalVlDiplas.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
//
//*/