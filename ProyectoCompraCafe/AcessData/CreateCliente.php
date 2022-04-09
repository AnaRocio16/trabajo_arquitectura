<?php
require 'DataBase.php';
if (!enpty_($_POST)) {
   //parametros de la tabla
        //
     $Identificacion= $_POST["Identificacion"];
     $Nombres= $_POST["Nombres"];
     $Apellidos = $_POST["Apellidos"];
     $KgAentregar = $_POST["KgAentregar"];       
     $DireciondeAgenciaMayorista = $_POST["DireciondeAgenciaMayorista"]; 
     $FechadeEntrega= $_POST["FechadeEntrega"];
     $Telefono= $_POST["Telefono"];
     $Imail= $_POST["Imail"];
     
     if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO ventasempresasmayoristas (Identificacion,Nombres,Apellidos,KgaEntregar,DireciondeAgenciaMayorista,FechadeEntrega,Telefono,Imail) values(?, ?, ?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($Identificacion,$Nombres,$Apellidos,$KgAentregar,$DireciondeAgenciaMayorista,$FechadeEntrega,$Telefono,$Imail));
			Database::disconnect();
			header("Location: VentasEmpresasMayoristas.html");
		}
     
//    $identificacion
//    $nombres
//    $apellidos
}
?>
