<?php
$Identificacion =$_POST["Identificacion"];
$Nombres =$_POST["Nombres"];
$Apellidos =$_POST["Apellidos"];
$ClienteNuevo=$_POST["ClienteNuevo"];
$ClienteAntiguo =$_POST["ClienteAntiguo"];
$ClienteSocio =$_POST["ClienteSocio"];
$Telefono =$_POST["Telefono"];
$DireciondeResidencia =$_POST["DireciondeResidencia"];
$NombredelaFinca =$_POST["NombredelaFinca"];

"<br>";
echo "la Identificacion es:  ",$Identificacion."<br>";
echo "los nombres son:  ",$Nombres."<br>";
echo "los apellidos son:  ",$Apellidos."<br>";
echo "el cliente es nuevo:  ",$ClienteNuevo."<br>";
echo "el cliente es antiguo:  ",$ClienteAntiguo."<br>";
echo "el cliente es socio:  ",$ClienteSocio."<br>";
echo "el telefono es:  ",$Telefono."<br>";
echo "la direcio de residencia es:  ",$DireciondeResidencia."<br>";
echo "el nombre de la finca es:  ",$NombredelaFinca."<br>";

?>