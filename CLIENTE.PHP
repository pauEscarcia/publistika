<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>  
  	<script src="scripts/tabla.js" type="text/javascript"></script>  
  </head>  
 
  <body>  
    <h1>Forma de captura</h1>
    	<form action="cotizacion.php" method="POST" id="miformulario">

        <p>Cliente:<input type="text" name="cliente" id="cliente" size="80"></p>
        <p>Asunto:<input type="text" name="asunto" id="asunto" size="80"></p>
        
    </form>
     <input type="button" value="Continuar" onclick="validar()"  />

  </body>  


</html>  

