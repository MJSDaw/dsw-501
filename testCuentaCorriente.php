<?php
    include_once "CuentaCorriente.php";

    $a = new CuentaCorriente();
    $a->consultarSaldo();
    echo "<br>";
    $a->ingresarDinero(250);
    $a->consultarSaldo();
    echo "<br>";

    $b = new CuentaCorriente(4766645569875847, "Moisés Jesús Santana Domínguez", 750);
    $b->consultarSaldo();
    echo "<br>";
    $b->retirarDinero(250);
    $b->consultarSaldo();
    echo "<br>";
    
    $b->transferirDinero($a, 125,5);
    $a->consultarSaldo();
    echo "<br>";
    $b->consultarSaldo();
    echo "<br>";


    // Prueba número de parámetros incorrecto
    $c = new CuentaCorriente(1234);
?>