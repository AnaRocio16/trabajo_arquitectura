<?php
$CompraCafeseco = $_POST["CompraCafeseco"];
$CompraCafeVerde= $_POST["CompraCafeVerde"];
$ActividadesdelDia =$_POST["ActividadesdelDia"];
$CompradeCafePorFactor =$_POST["CompradeCafePorFactor"];
$TotalCompra =$_POST["TotalCompra"];
$TotalVenta =$_POST["TotalVenta"];
 
"<br>";
echo "la compra de Cafe seco es: ",$CompraCafeseco."<br>";
echo "la la compra de cafe verde es: ",$CompraCafeVerde."<br>";
echo "las actividades del dia son:  ",$ActividadesdelDia."<br>";
echo "las compras de CafeporFactor son:  ",$CompradeCafePorFactor."<br>";
echo "el total de compras de cafe son:  ",$TotalCompra."<br>";
echo "el total de ventas de cafe es:  ",$TotalVenta."<br>";
?>