<?php

//variables post
$cantidad= $_POST['cantidad'];
$descripcion=$_POST['descripcion'];
$pUnitario=$_POST['pUni'];
$subtotal=$_POST['sub'];
$idCliente=$_POST['idCliente'];

$numRegistros= count($_POST['sub']);


$cantidad=$_POST['cantidad'];
//VALOR 
foreach($_POST['cantidad'] as $valor) {
echo '<p>'. $valor ."</p>\n";
}
foreach($_POST['descripcion'] as $valor) {
echo '<p>'. $valor ."</p>\n";
}

foreach($_POST['pUni'] as $valor) {
echo '<p>'. $valor ."</p>\n";
}

foreach($_POST['sub'] as $valor) {
echo '<p>'. $valor ."</p>\n";
}


echo  '<p>'."numRegistros".$numRegistros."</p>\n";

//Configuracion de la conexion a base de datos
include 'config.php';
$conn = mysql_connect($hostdb, $usuariodb, $clavedb);
if (!$conn)     
	die('No me pude conectar: ' . mysql_error());
if (!mysql_select_db($nombredb))    
	die("No pude seleccionar la base de datos ".$nombredb);



        
			
for($i=0; $i<$numRegistros;$i++){ 
	if ($numRegistros!=0) {
	$sql ="INSERT INTO articulo (idArticulo,cantidad,descripcion,pUnitario,idCliente,subtotal)VALUES(NULL,'$cantidad[$i]','$descripcion[$i]','$pUnitario[$i]','$idCliente','$subtotal[$i]')";
	  
	 //echo  '<p>'.$cantidad[$i]."</p>\n";
	 //echo  '<p>'.$descripcion[$i]."</p>\n";
	 //echo  '<p>'.$pUnitario[$i]."</p>\n";
	 //echo  '<p>'.$idCliente."</p>\n";
	 //echo  '<p>'.$subtotal[$i]."</p>\n";
	if (!mysql_query($sql,$conn)){
            die('Error: ' . mysql_error($conn));
          }
          echo " record added \n"; 
	
	}

}


//

//"INSERT INTO Persons (FirstName, LastName, Age)
//VALUES
//('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

//for ($i=0;$i<$this->sub.length;$i++){ 
//    if($this->sub[$i]!=0){ 
//        $sql = "INSERT INTO articulo (cantidad, descripcion, pUnitario,idCliente,subtotal)" VALUES ('".$this->cantidad[$i]."','".$this->descripcion[$i]."','".$this->pUni[$i]."','NULL','".$this->sub[$i]."');
//    }
//}  

//mysql_query($sql,$conn);


?>