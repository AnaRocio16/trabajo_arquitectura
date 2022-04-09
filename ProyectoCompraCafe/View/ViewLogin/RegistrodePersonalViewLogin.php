<?php
$Identificacion =$_POST["Identificacion"];
$Nombres =$_POST["Nombres"];
$Apellidos =$_POST["Apellidos"];
$FechadeIngreso=$_POST["FechadeIngreso"];
$Direcionderesidencia=$_POST["Direcionderesidencia"];
$Telefono=$_POST["Telefono"];
$Imail=$_POST["Imail"];
$CargoOFuncion=$_POST["CargoOFuncion"];

"<br>";
echo "la identificacion es:  ",$Identificacion."<br>";
echo "los nombres son:  ",$Nombres."<br>";
echo "los apellidos son:  ",$Apellidos."<br>";
echo "la fecha de ingreso es:  ",$FechadeIngreso."<br>";
echo "la direcion de residencia es:  ",$Direcionderesidencia."<br>";
echo "el telefono es:  ",$Telefono."<br>";
echo "el imail es:  ",$Imail."<br>";
echo "el cargo o funcion es:  ",$CargoOFuncion."<br>";

?>