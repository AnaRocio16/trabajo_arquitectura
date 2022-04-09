<?php
$Identificacion= $_POST["Identificacion"];
$Nombres= $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$KgAentregar = $_POST["KgAentregar"];       
$DireciondeAgenciaMayorista = $_POST["DireciondeAgenciaMayorista"]; 
$FechadeEntrega= $_POST["FechadeEntrega"];
$Telefono= $_POST["Telefono"];
$Imail= $_POST["Imail"];
       
"<br>";
echo "la identificacion es:  ",$Identificacion."<br>";

echo "los nombres son:   ",$Nombres."<br>";

echo "los apellidos son:  ",$Apellidos."<br>";

echo "los KilosAentregar son:  ",$KgAentregar."<br>";

echo "la DireciondeAgenciaMayorista de compra es:  ",$DireciondeAgenciaMayorista."<br>";

echo "la FechadeEntrega es:  ",$FechadeEntrega."<br>";

echo "el telefono es:  ",$Telefono."<br>";

echo "el Imail es:  ",$Imail."<br>";

?>

