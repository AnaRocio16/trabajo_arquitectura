<?php
   $empresa = $_POST["empresa"];
   $propietario = $_POST["propietario"];
   $NIT = $_POST["NIT"];
   $RUT =$_POST["RUT"];
   $telefono = $_POST["telefono"];
   $imail = $_POST["imail"];
   
   "<br>";
   echo "el nombre de la empresa es: ", $empresa."<br>";
   echo "el nombre del propietario es: ", $propietario."<br>";
   echo "el NIT es: ", $NIT."<br>";
   echo "el RUT es: ", $RUT."<br>";
   echo "el telefono es: ", $telefono."<br>";
   echo "el imail es: ", $imail."<br>";
?>