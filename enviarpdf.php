<?php

require('fpdf/fpdf.php');
class PDF extends FPDF

{

function TablaColores($header)
{
//Colores, ancho de línea y fuente en negrita
$this->SetFillColor(255,0,0);
$this->SetTextColor(255);
$this->SetDrawColor(128,0,0);
$this->SetLineWidth(.3);
$this->SetFont('','B');
//Cabecera

for($i=0;$i<count($header);$i++)
$this->Cell(40,7,$header[$i],1,0,'C',1);
$this->Ln();
//Restauración de colores y fuentes
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
//Datos
$fill=false;

$this->Cell(40,6,"hola",'LR',0,'L',$fill);
$this->Cell(40,6,"hola2",'LR',0,'L',$fill);
$this->Cell(40,6,"hola3",'LR',0,'R',$fill);
$this->Cell(40,6,"hola4",'LR',0,'R',$fill);
$this->Ln();
$fill=true;
$this->Cell(40,6,"col",'LR',0,'L',$fill);
$this->Cell(40,6,"col2",'LR',0,'L',$fill);
$this->Cell(40,6,"col3",'LR',0,'R',$fill);
$this->Cell(40,6,"col4",'LR',0,'R',$fill);
$fill=!$fill;
$this->Ln();
$this->Cell(160,0,'','T');
}
    function TablaBasica()
    {
      //numero de filas
        $nf=10; 
        //numero de columnas
        $nc=4;
      /*for ($i=1; $i<= $nf; $i++) { 
            for ($c = 1; $c <= $nc; $c++) { 
              $this->Cell(40,5,$_POST["fila$i$c"],1);
              if($_POST["fila$i$c"]==$_POST['fila14']){
                  $this->Ln();
              }
               if($_POST["fila$i$c"]==$_POST['fila24']){
                  $this->Ln();
              }
               if($_POST["fila$i$c"]==$_POST['fila34']){
                  $this->Ln();
              }
              if($_POST["fila$i$c"]==$_POST['fila44']){
                  $this->Ln();
              }
              if($_POST["fila$i$c"]==$_POST['fila54']){
                  $this->Ln();
              }
              if($_POST["fila$i$c"]==$_POST['fila64']){
                  $this->Ln();
              }
              if($_POST["fila$i$c"]==$_POST['fila74']){
                  $this->Ln();
              }
              if($_POST["fila$i$c"]==$_POST['fila84']){
                  $this->Ln();
              }
              if($_POST["fila$i$c"]==$_POST['fila94']){
                  $this->Ln();
              }

            
              $ft+=$c; 
              $ct[$c]+=$c; 
            } 
        } */

      $this->Cell(40,5,"CANTIDAD",1);
      $this->Cell(75,5,"DESCRIPCION",1);
      $this->Cell(40,5,"P.UNITARIO",1);
      $this->Cell(40,5,"IMPORTE",1);
      $this->Ln();

      $this->Cell(40,5,$_POST['fila11'],1);
      $this->Cell(75,5,$_POST["fila12"],1);
      $this->Cell(40,5,$_POST["fila13"],1);
      if($_POST["fila14"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila14"],1);
      }
      
      $this->Ln();
      $this->Cell(40,5,$_POST["fila21"],1);
      $this->Cell(75,5,$_POST["fila22"],1);
      $this->Cell(40,5,$_POST["fila23"],1);
      if($_POST["fila24"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila24"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila31"],1);
      $this->Cell(75,5,$_POST["fila32"],1);
      $this->Cell(40,5,$_POST["fila33"],1);
      if($_POST["fila34"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila34"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila41"],1);
      $this->Cell(75,5,$_POST["fila42"],1);
      $this->Cell(40,5,$_POST["fila43"],1);
      if($_POST["fila44"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila44"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila51"],1);
      $this->Cell(75,5,$_POST["fila52"],1);
      $this->Cell(40,5,$_POST["fila53"],1);
      if($_POST["fila54"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila54"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila61"],1);
      $this->Cell(75,5,$_POST["fila62"],1);
      $this->Cell(40,5,$_POST["fila63"],1);
      if($_POST["fila64"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila64"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila71"],1);
      $this->Cell(75,5,$_POST["fila72"],1);
      $this->Cell(40,5,$_POST["fila73"],1);
      if($_POST["fila74"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila74"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila81"],1);
      $this->Cell(75,5,$_POST["fila82"],1);
      $this->Cell(40,5,$_POST["fila83"],1);
      if($_POST["fila84"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila84"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila91"],1);
      $this->Cell(75,5,$_POST["fila92"],1);
      $this->Cell(40,5,$_POST["fila93"],1);
      if($_POST["fila94"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila94"],1);
      }
      $this->Ln();
      $this->Cell(40,5,$_POST["fila101"],1);
      $this->Cell(75,5,$_POST["fila102"],1);
      $this->Cell(40,5,$_POST["fila103"],1);
      if($_POST["fila104"]==0){
        $this->Cell(40,5," ",1);
      }else{
          $this->Cell(40,5,$_POST["fila104"],1);
      }
      $this->Ln();
    }


    function Footer() // Pie de página
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        //$this->Cell(0,10,'Este es el pie de página creado con el método Footer() de la clase creada PDF que hereda de FPDF','T',0,'C');
    }
 
    function Header() //Encabezado
    {
        //Define tipo de letra a usar, Arial, Negrita, 15
        $this->SetFont('Arial','B',9);
 
        
        $this->Line(10,10,206,10);
        $this->Line(10,35.5,206,35.5);
 
       // $this->Cell(30,25,'',0,0,'C',$this->Image('imagenes/logo_publistika.jpg', 152,12, 19));
        $this->Cell(111,25,'',0,0,'C', $this->Image('imagenes/logo_publistika.jpg',70,12,80));
        //$this->Cell(40,25,'',0,0,'C',$this->Image('images/logoDerecha.png', 175, 12, 19));
 
        //Se da un salto de línea de 25
        $this->Ln(25);
    }
 
}
$fecha = time(); 
/*Para darle el formato que quieras año:mes:dia:hora:minuto:segundo*/         
date ( "YY MM DD" , $fecha ); 
$pdf=new PDF();
$pdf->AddPage('P', 'Letter');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10, 'Fecha: '.date ( "j" ).' de '.date ( "M" ).' del '.date ( "Y" ),0,1,'R');
$pdf->SetFont('Arial','B',14);

$pdf->Cell(40,5,'Nombre:');
$pdf->Cell(40,5,$_POST["Cliente"]);
$pdf->Ln();
$pdf->Cell(40,5,'Asunto:');
$pdf->Cell(40,5,$_POST["asunto"]);
$pdf->Ln();
$pdf->Ln();
$pdf->TablaBasica();
$pdf->Ln(); 
$pdf->Cell(130,5,'');
$pdf->Cell(27,5,'Subtotal');
$pdf->Cell(5,5,'$');
$pdf->Cell(2,5,$_POST["Total"]);
$pdf->Ln();
$pdf->Cell(130,5,'');
$pdf->Cell(27,5,'IVA');
$pdf->Cell(5,5,'$');
$pdf->Cell(2,5,$_POST["iva"]);
$pdf->Ln();
$pdf->Cell(130,5,'');
$pdf->Cell(27,5,'Total');
$pdf->Cell(5,5,'$');
$pdf->Cell(2,5,$_POST["Totalf"]);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->Ln();$pdf->Ln(); 
$pdf->Cell(90,25,'');
$pdf->Cell(27,5,'Atte.');
$pdf->Ln();
$pdf->Cell(68,25,'');
$pdf->Cell(27,5,utf8_decode('Osvaldo Neri Calderón.'));
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Ln();$pdf->Ln();  
$pdf->Cell(27,5,utf8_decode('Tiempo de Entrega: 2 días hábiles'));
$pdf->Ln();
$pdf->Cell(27,5,utf8_decode("Vigencia de la cotización: 21 días"));
$pdf->Image('imagenes/fot.jpg' , 0 ,242, 220 , 38,'JPG');
$pdf->Output("cotizacion.pdf");
//$pdf->Output();



///////////////////////////////////////////////////////////////////////////////////////////
?>

<!--FUNCION PARA ENVIAR CORREO-->
<?php
function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}

if (isset($_POST['recibir'])) {
    if (comprobar_email($_POST['email'])) {
        require_once("PHPMailer/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->From = "from@domain.com";
        $mail->FromName = "Publistika cotizaciones  ";
        $mail->Subject = "Buenos dias te envio la cotizacion que nos pediste";
        $mail->Body = "Buenos dias te envio la cotización que nos pediste.";
        $mail->AddAddress($_POST['email'], "User Name");
        $mail->AddAddress('paulina_151090@hotmail.com', 'John Doe');
        $archivo = 'cotizacion.pdf';
        $mail->AddAttachment($archivo,$archivo);
        $mail->Send();
        echo '<p>Se ha enviado correctamente el email a '.$_POST['email'].'!</p>';
        echo"<a href=\"http://cotizacion.publistika.com/\">Regresar</a>";
    }
    else {
        echo '<p>El email introducido no es correcto!</p>';
    }
}
?>
