<?php
       $precio=$_POST['precio'];
       $cantidad=$_POST['cantidad'];

       $nuevoprecio=$precio*1-0.05;
       $importe_compra=$nuevoprecio*$cantidad;
       $importe_descuento=$importe_compra*0.07;
       $importe_pagar=$importe_compra-$importe_descuento;
       $caramelos=$cantidad*2;

       echo "El nuevo precio es: ".$nuevoprecio."<br>";
       echo "El importe de la compra es de: ".$importe_compra."<br>";
       echo "El importe del descuento: ".$importe_descuento."<br>";
       echo "El importe a pagar es de: ".$importe_pagar."<br>";
       echo "Cantidad de caramelos de regalo: ".$caramelos."<br>";



?>