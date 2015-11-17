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
    

      $this->Cell(40,5,"CANTIDAD",1);
      $this->Cell(75,5,"DESCRIPCION",1);
      $this->Cell(40,5,"P.UNITARIO",1);
      $this->Cell(40,5,"IMPORTE",1);
      $this->Ln();

      $this->Cell(40,5,$_POST['cantidad1'],1);
      $this->Cell(75,5,$_POST["descripcion1"],1);
      $this->Cell(40,5,$_POST["pUni1"],1);
      if($_POST["sub1"]!=0){$this->Cell(40,5,$_POST["sub1"],1);}
      
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad2"],1);
      $this->Cell(75,5,$_POST["descripcion2"],1);
      $this->Cell(40,5,$_POST["pUni2"],1);
      $this->Cell(40,5,$_POST["sub2"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad3"],1);
      $this->Cell(75,5,$_POST["descripcion3"],1);
      $this->Cell(40,5,$_POST["pUni3"],1);
      $this->Cell(40,5,$_POST["sub3"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad4"],1);
      $this->Cell(75,5,$_POST["descripcion4"],1);
      $this->Cell(40,5,$_POST["pUni4"],1);
      $this->Cell(40,5,$_POST["sub4"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad5"],1);
      $this->Cell(75,5,$_POST["descripcion5"],1);
      $this->Cell(40,5,$_POST["pUni5"],1);
      $this->Cell(40,5,$_POST["sub5"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad6"],1);
      $this->Cell(75,5,$_POST["descripcion6"],1);
      $this->Cell(40,5,$_POST["pUni6"],1);
      $this->Cell(40,5,$_POST["sub6"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad7"],1);
      $this->Cell(75,5,$_POST["descripcion7"],1);
      $this->Cell(40,5,$_POST["pUni7"],1);
      $this->Cell(40,5,$_POST["sub7"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad8"],1);
      $this->Cell(75,5,$_POST["descripcion8"],1);
      $this->Cell(40,5,$_POST["pUni8"],1);
      $this->Cell(40,5,$_POST["sub8"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad9"],1);
      $this->Cell(75,5,$_POST["descripcion9"],1);
      $this->Cell(40,5,$_POST["pUni9"],1);
      $this->Cell(40,5,$_POST["sub9"],1);
      $this->Ln();
      $this->Cell(40,5,$_POST["cantidad10"],1);
      $this->Cell(75,5,$_POST["descripcion10"],1);
      $this->Cell(40,5,$_POST["pUni10"],1);
      $this->Cell(40,5,$_POST["sub10"],1);
      $this->Ln();
    }


    function Footer() // Pie de página
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Este es el pie de página creado con el método Footer() de la clase creada PDF que hereda de FPDF','T',0,'C');
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

$pdf->Output("cotizacion.pdf");
$pdf->Output();



///////////////////////////////////////////////////////////////////////////////////////////
?>





