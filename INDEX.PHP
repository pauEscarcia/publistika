

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>  
  	<script src="scripts/tabla.js" type="text/javascript"></script>  
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>-->
  </head>  
  <body>  
    <h1>Cotizaciones</h1> 
    	<form action="enviarpdf.php" method="POST" id="miformulario">
         <?php
          print "<p>" .date ( "j" ).' de '.date ( "M" ).' del '.date ( "Y" ). "</p>";
          ?> 
        <label>Nombre:</label> <input type="text" name="Cliente" size="135"><br>
        <label>Asunto  :</label> <input type="text" name="asunto" size="135"><br>
        <label>Email:</label><input type="email" name="email" size="135">
        <br><br><br>
        <?php 
        //numero de filas
        $nf=10; 
        //numero de columnas
        $nc=4;
        echo'<table border="1" id="tblSample">'; 
        //encabezado de la tabla
        echo'<td colspan="1" >Cantidad</td>';
        echo'<td colspan="1">Descripcion </td>';
        echo'<td colspan="1">P.Unitario</td>';
        echo'<td colspan="1">Subtotal</td>';
        //tabla 
        for ($i = 1; $i <= $nf; $i++) { 
          echo '<tr>'; 
            for ($c = 1; $c <= $nc; $c++) { 
              echo '<td>';
              echo '<input type="text"  name="fila'.$i."".$c.'" id="fila'.$i."".$c.'" size="32" onblur="multiplicar();total();" >'; 
              $ft+=$c; 
              $ct[$c]+=$c; 
            } 
        }
        echo '</tr></table>';
        ?>
        <label>Subtotal $</label> <input type="text" name="Total" id="Total" size="20"readonly><br>
        <!--16 porciento-->
        <label>IVA $</label> <input type="text" name="iva" id="iva" size="20"readonly><br>
        <label>Total $</label> <input type="text" name="Totalf" id="Totalf" size="20"readonly><br>
        <input type="submit" name="recibir" value="Enviar email"/>      
      </form>
  </body>  
</html>  

