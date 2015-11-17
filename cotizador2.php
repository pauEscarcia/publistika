

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>  
  	<script src="scripts/tabla.js" type="text/javascript"></script>  
  </head>  
 
  <body>  
    <h1>Cotizaciones</h1> 
    	<form action="guardarCotizacion.php" method="POST" id="miformulario">
         <?php
          print "<p>" .date ( "j" ).' de '.date ( "M" ).' del '.date ( "Y" ). "</p>";
          ?> 
        <label>Nombre:</label> <input type="text" name="Cliente" size="135"><br>
        <label>Asunto  :</label> <input type="text" name="Cliente" size="135"><br><br><br>
        <table border="1" id="tblSample">
          <tr>
            <td colspan="1">Cantidad</td>
            <td colspan="1">Descripcion</td>
            <td colspan="1">P.Unitario</td>
            <td colspan="1">Subtotal</td>
          </tr>
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad1" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion1" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni1" size="20"  onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub1" size="20"  onkeypress="keyPressTest(event, this);" disabled />
            </td>
            <!--2-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad2" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion2" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni2" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub2" size="20"  onkeypress="keyPressTest(event, this);" disabled />
            </td>
          </tr>
                      <!--3-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad3" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion3" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni3" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub3" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
           <!--4-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad4" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion4" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni4" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub4" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
           <!--5-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad5" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion5" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni5" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub5" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
          <!--6-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad6" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion6" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni6" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub6" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
           <!--7-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad7" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion7" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni7" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub7" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
          <!--8-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad8" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion8" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni8" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub8" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
          <!--9-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad9" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion9" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni9" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub9" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
          <!--10-->
          <tr>
            <td>
              <input type="number"  name="cantidad[]" id="cantidad10" size="20" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="text" name="descripcion[]"id="descripcion10" size="60" onkeypress="keyPressTest(event, this);" />
            </td>
            <td>
              <input type="number" name="pUni[]"id="pUni10" size="20"   onkeypress="keyPressTest(event, this);" />
            </td>
             <td>
              <input type="number" name="sub[]" id="sub10" size="20"  onkeypress="keyPressTest(event, this);"  disabled />
            </td>
          </tr>
          </tr>
        </table> <br>
         <label>Total</label> <input type="text" name="Total" size="20"><br>
        <p>
			<input type="button" value="Validar" onclick="multiplicar();" />
      <!--<input type="button" value="Nuevo" onclick="addRowToTable();" />
			<input type="button" value="Eliminar" onclick="removeRowFromTable();" />-->
        </p>  
    </form>
     <input type="button" value="Guardar" onclick="validar()"  />

  </body>  


</html>  

