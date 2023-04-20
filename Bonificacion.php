<?php
        $numeroIT=$_POST['valorIT'];
        $numeroH=$_POST['valorH'];
        $sueldobasico=600;
        $bonificacion=$numeroH * 50;
        $comision=$numeroIT * 7.5;
        $sueldobruto=$bonificacion+$comision+$sueldobasico;
        $descuento=$sueldobruto*11;
        $sueldoneto=$descuento-$sueldobruto;
        echo "La bonificacion es de: ".$bonificacion."<br>";
        echo "La comision es de: ".$comision."<br>";
        echo "El sueldo bruto es de: ".$sueldobruto."<br>";
        echo "El descuento es de: ".$descuento."<br>";
        echo "El sueldo neto es de: ".$sueldoneto."<br>";
?>
      