<?php
//include connection file 
include_once("storeFurniture.php");
include_once('libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Furniture List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('id'=>'ID', 'acadamic_year'=> 'Acadamic_year', 'department'=> 'Department','item_description'=> 'Item_name','unit'=> 'No of Units','item_cost'=> 'Item_cost','total'=> 'Total','justification'=> 'Justification');
 
$result = mysqli_query($connString, "SELECT id, acadamic_year, department, item_description,unit,item_cost,total,justification FROM non_reccuring_furniture") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM non_reccuring_furniture");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>