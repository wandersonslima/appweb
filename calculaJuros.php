<?php
    $valor=$_POST["valor"];
    $juros=$_POST["juros"];
    $entrada=$_POST["entrada"];
    $qtdparcelas=$_POST["parcelas"];
    $parcela;

    $valorfinal;

    $valorfinal = $valor-$entrada;

    $juros = $juros/100;

    $valor= $valor-$entrada;

    $valor = $valor * $juros;

    $parcela = $valorfinal/$qtdparcelas;

    $parcela = $parcela + $valor;

    $valorfinal =  $parcela * $qtdparcelas;

    echo $valor."<br/>";
    echo $juros."<br/>";
    echo $entrada."<br/>";
    echo $qtdparcelas."<br/>";
    echo $parcela."<br/>";
    echo "<br/><br/>";

    echo "Valor:".$valor."<br/>";
    echo "Valor parcela:".$parcela."<br>";
    echo "Valor final:".$valorfinal."<br>";





?>