<?php
session_start();
if(!isset($_SESSION["Key"])){
  header("Location:index.php");
}
if($_SESSION["type_user"] == "principal"){
  header("Location:principal.php");
}else if($_SESSION["type_user"] == "admin"){
  header("Location:admin.php");
}

// Include the main TCPDF library (search for installation path).
require_once('./pdf_generation/tcppdf/tcpdf.php');



class MYPDF extends TCPDF {

  //Page header
  public $college_name="";
  public $department="";
  public $academic_year="";
  public function Header() {
    // Logo

    
   $image_file = './images/logo.jpg';
    $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    // Set font
    $this->SetFont('helvetica', 'B', 16);
    // Title
    $this->Ln(5);
    $this->Cell(0, 15, $this->college_name, 0, false, 'C', 0, '', 0, false, 'M', 'M');
    $this->Ln(5);
    $this->SetFont('helvetica', 'B', 12);
    $this->Cell(0, 15, '(Autonomous)', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    $this->Ln(10);
    
    $this->SetFont('helvetica', 'B', 14);
    //":: Academic Year: ".$this->academic_year
    $this->Cell(0, 15, "Department of ".$this->department, 0, false, 'C', 0, '', 0, false, 'M', 'M');
  }

  // Page footer
  public function Footer() {
    // Position at 15 mm from bottom
    $this->SetY(-15);
    // Set font
    $this->SetFont('helvetica', 'I', 8);
    // Page number
    $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
  }
}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

 
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SVECW');
$pdf->SetTitle('Budget');
$pdf->SetSubject('Budget');
$pdf->SetKeywords('SVECW, BUDGET, Department, test, guide');


function dept_name($dept_sname){
  switch ($dept_sname) {
    case 'IT':
      return "Information Technology";
      break;
    case 'CSE':
      return "Computer Science and Engineering";
      break;
    case 'IT':
      return "Information Technology";
      break;
    
  }
}

$college_name = 'Shri Vishnu Engineering College for Women:: Bhimavaram';
$department = $_SESSION["department"];
$academic_year = $_POST["academic_year"];


//echo $academic_year;

$pdf->college_name = $college_name;
$pdf->department =dept_name($_SESSION["department"]);
$pdf->academic_year=$academic_year;
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
//$pdf->Header();
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}


// ---------------------------------------------------------



function body_pdf($pdf,$academic_year,$department){
  $con =mysqli_connect("localhost","root","","budget");
  if(!$con){
    die("Connection error".mysqli_error($con));
  }
  //echo "Connection Successful";
  $query = "SELECT * FROM `non_reccuring_equipment` where academic_year='".$academic_year."' and department='".$department."'";
 // echo $query;
  $rs = mysqli_query($con,$query);
  $output = '<table cellspacing="0" border="1">';
  $cols = mysqli_num_fields($rs);
  $i = 0;
  $table_head = '<tr>';
  $table_head = $table_head.'<th align="center" width="40">SNo</th>';
  $table_head = $table_head.'<th align="center" width="180">Item Name</th>';
  $table_head = $table_head.'<th align="center" width="65">Quantity</th>';
  $table_head = $table_head.'<th align="center" width="60">Unit Cost</th>';
  $table_head = $table_head.'<th align="center" width="80">Total Cost</th>';
  $table_head = $table_head.'<th align="center" width="200">Justification</th>';
  $table_head = $table_head.'</tr>';
  $tbody='';
  $sno=1;
  $total_cost = 0;
  while($row = mysqli_fetch_array($rs)){
    
    $tbody = $tbody.'<tr>';
    $tbody = $tbody.'<td align="center">'.$sno.'</td>';
    $tbody = $tbody.'<td align="left">'.$row[3].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[4].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[5].'</td>';
    $tbody = $tbody.'<td align="right">'.$row[6].'</td>';
    $tbody = $tbody.'<td align="left">'.$row[7].'</td>';
    $tbody = $tbody.'</tr>';
    $sno++;
    $total_cost += $row[6];
  }
  $total = '<tr>
  <td colspan="4" align="right"><b>Total Cost</b></td>
  <td align="right"><b>'.$total_cost.'/-</b></td>
  </tr>';
  $output =$output.$table_head.$tbody.$total.'</table>';

$tbl = <<<EOF
<style type="text/css">
      table {
        width: 100%;
      }
      th{
        font-weight: bold;
      }
      
</style>
$output
EOF;
return $tbl;
}
// Begin the for furniture code
// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(10);
$pdf->Write(0, 'The following non recurring equipment is required for the academic year 2019-20', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);
$pdf->Ln(5);
// -----------------------------------------------

$data = body_pdf($pdf,$academic_year,$department);

$pdf->writeHTML($data, true, false, true, false, '');

// End the for furniture code
//$filename="Budget Report of ".$pdf->department." (".$pdf->academic_year.").pdf";
//$pdf->Output($filename, 'I');


//------------------------------
function body_pdf1($pdf,$academic_year,$department){
  $con =mysqli_connect("localhost","root","","budget");
  if(!$con){
    die("Connection error".mysqli_error($con));
  }
  //echo "Connection Successful";
  $query = "SELECT * FROM `non_reccuring_furniture` where academic_year='".$academic_year."' and department='".$department."'";
 // echo $query;
  $rs = mysqli_query($con,$query);
  $output = '<table cellspacing="0" border="1">';
  $cols = mysqli_num_fields($rs);
  $i = 0;
  $table_head = '<tr>';
  $table_head = $table_head.'<th align="center" width="40">SNo</th>';
  $table_head = $table_head.'<th align="center" width="180">Item Name</th>';
  $table_head = $table_head.'<th align="center" width="65">Quantity</th>';
  $table_head = $table_head.'<th align="center" width="60">Unit Cost</th>';
  $table_head = $table_head.'<th align="center" width="80">Total Cost</th>';
  $table_head = $table_head.'<th align="center" width="200">Justification</th>';
  $table_head = $table_head.'</tr>';
  $tbody='';
  $sno=1;
  $total_cost = 0;
  while($row = mysqli_fetch_array($rs)){
    
    $tbody = $tbody.'<tr>';
    $tbody = $tbody.'<td align="center">'.$sno.'</td>';
    $tbody = $tbody.'<td align="left">'.$row[3].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[4].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[5].'</td>';
    $tbody = $tbody.'<td align="right">'.$row[6].'</td>';
    $tbody = $tbody.'<td align="left">'.$row[7].'</td>';
    $tbody = $tbody.'</tr>';
    $sno++;
    $total_cost += $row[6];
  }
  $total = '<tr>
  <td colspan="4" align="right"><b>Total Cost</b></td>
  <td align="right"><b>'.$total_cost.'/-</b></td>
  </tr>';
  $output =$output.$table_head.$tbody.$total.'</table>';

  $tbl = <<<EOF
  <style type="text/css">
      table {
        width: 100%;
      }
      th{
        font-weight: bold;
      }
      
  </style>
  $output
EOF;
return $tbl;
}
// Begin the for furniture code
// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(10);
$pdf->Write(0, 'The following non recurring furniture is required for the academic year 2019-20', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);
$pdf->Ln(5);
// -----------------------------------------------

$data = body_pdf1($pdf,$academic_year,$department);

$pdf->writeHTML($data, true, false, true, false, '');

//-------------------------------------------------
function body_pdf2($pdf,$academic_year,$department){
  $con =mysqli_connect("localhost","root","","budget");
  if(!$con){
    die("Connection error".mysqli_error($con));
  }
  //echo "Connection Successful";
  $query = "SELECT * FROM `r_d_activities` where academic_year='".$academic_year."' and department='".$department."'";
 // echo $query;
  $rs = mysqli_query($con,$query);
  $output = '<table cellspacing="0" border="1">';
  $cols = mysqli_num_fields($rs);
  $i = 0;
  $table_head = '<tr>';
  $table_head = $table_head.'<th align="center" width="40">SNo</th>';
  $table_head = $table_head.'<th align="center" width="460">Activity</th>';
  $table_head = $table_head.'<th align="center" width="100">Amount</th>';
  //$table_head = $table_head.'<th align="center" width="60">Unit Cost</th>';
  //$table_head = $table_head.'<th align="center" width="80">Total Cost</th>';
  //$table_head = $table_head.'<th align="center" width="200">Justification</th>';
  $table_head = $table_head.'</tr>';
  $tbody='';
  $sno=1;
  $total_cost = 0;
  while($row = mysqli_fetch_array($rs)){
    
    $tbody = $tbody.'<tr>';
    $tbody = $tbody.'<td align="center">'.$sno.'</td>';
    $tbody = $tbody.'<td align="left">'.$row[3].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[4].'</td>';
    //$tbody = $tbody.'<td align="center">'.$row[5].'</td>';
    //$tbody = $tbody.'<td align="right">'.$row[6].'</td>';
    //$tbody = $tbody.'<td align="left">'.$row[7].'</td>';
    $tbody = $tbody.'</tr>';
    $sno++;
    $total_cost += $row[4];
  }
  $total = '<tr>
  <td colspan="2" align="right"><b>Total Cost</b></td>
  <td align="right"><b>'.$total_cost.'/-</b></td>
  </tr>';
  $output =$output.$table_head.$tbody.$total.'</table>';

$tbl = <<<EOF
<style type="text/css">
      table {
        width: 100%;
      }
      th{
        font-weight: bold;
      }
      
</style>
$output
EOF;
return $tbl;
}
// Begin the for furniture code
// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(10);
$pdf->Write(0, 'Inhouse R & D Activities for the academic year 2019-20', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);
$pdf->Ln(5);
// -----------------------------------------------

$data = body_pdf2($pdf,$academic_year,$department);

$pdf->writeHTML($data, true, false, true, false, '');

//---------------------------------------------------
function body_pdf3($pdf,$academic_year,$department){
  $con =mysqli_connect("localhost","root","","budget");
  if(!$con){
    die("Connection error".mysqli_error($con));
  }
  //echo "Connection Successful";
  $query = "SELECT * FROM `printing_stationary` where academic_year='".$academic_year."' and department='".$department."'";
 // echo $query;
  $rs = mysqli_query($con,$query);
  $output = '<table cellspacing="0" border="1">';
  $cols = mysqli_num_fields($rs);
  $i = 0;
  $table_head = '<tr>';
  $table_head = $table_head.'<th align="center" width="40">SNo</th>';
  $table_head = $table_head.'<th align="center" width="240">Activity</th>';
  $table_head = $table_head.'<th align="center" width="50">Quantity</th>';
  $table_head = $table_head.'<th align="center" width="70">Unit Cost</th>';
  $table_head = $table_head.'<th align="center" width="100">Total Cost</th>';
  //$table_head = $table_head.'<th align="center" width="200">Justification</th>';
  $table_head = $table_head.'</tr>';
  $tbody='';
  $sno=1;
  $total_cost = 0;
  while($row = mysqli_fetch_array($rs)){
    
    $tbody = $tbody.'<tr>';
    $tbody = $tbody.'<td align="center">'.$sno.'</td>';
    $tbody = $tbody.'<td align="left">'.$row[3].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[4].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[5].'</td>';
    $tbody = $tbody.'<td align="right">'.$row[6].'</td>';
    //$tbody = $tbody.'<td align="left">'.$row[7].'</td>';
    $tbody = $tbody.'</tr>';
    $sno++;
    $total_cost += $row[6];
  }
  $total = '<tr>
  <td colspan="4" align="right"><b>Total Cost</b></td>
  <td align="right"><b>'.$total_cost.'/-</b></td>
  </tr>';
  $output =$output.$table_head.$tbody.$total.'</table>';

$tbl = <<<EOF
<style type="text/css">
      table {
        width: 100%;
      }
      th{
        font-weight: bold;
      }
      
</style>
$output
EOF;
return $tbl;
}
// Begin the for furniture code
// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(10);
$pdf->Write(0, 'Printing & Stationary for the academic  year 2019-20', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);
$pdf->Ln(5);
// -----------------------------------------------

$data = body_pdf3($pdf,$academic_year,$department);

$pdf->writeHTML($data, true, false, true, false, '');
//---------------------------------------------------
function body_pdf4($pdf,$academic_year,$department){
  $con =mysqli_connect("localhost","root","","budget");
  if(!$con){
    die("Connection error".mysqli_error($con));
  }
  //echo "Connection Successful";
  $query = "SELECT * FROM `consumables` where academic_year='".$academic_year."' and department='".$department."'";
 // echo $query;
  $rs = mysqli_query($con,$query);
  $output = '<table cellspacing="0" border="1">';
  $cols = mysqli_num_fields($rs);
  $i = 0;
  $table_head = '<tr>';
  $table_head = $table_head.'<th align="center" width="40">SNo</th>';
  $table_head = $table_head.'<th align="center" width="180">Item Name</th>';
  $table_head = $table_head.'<th align="center" width="65">Quantity</th>';
  $table_head = $table_head.'<th align="center" width="60">Unit Cost</th>';
  $table_head = $table_head.'<th align="center" width="80">Total Cost</th>';
  $table_head = $table_head.'<th align="center" width="200">Justification</th>';
  $table_head = $table_head.'</tr>';
  $tbody='';
  $sno=1;
  $total_cost = 0;
  while($row = mysqli_fetch_array($rs)){
    
    $tbody = $tbody.'<tr>';
    $tbody = $tbody.'<td align="center">'.$sno.'</td>';
    $tbody = $tbody.'<td align="left">'.$row[3].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[4].'</td>';
    $tbody = $tbody.'<td align="center">'.$row[5].'</td>';
    $tbody = $tbody.'<td align="right">'.$row[6].'</td>';
    $tbody = $tbody.'<td align="left">'.$row[7].'</td>';
    $tbody = $tbody.'</tr>';
    $sno++;
    $total_cost += $row[6];
  }
  $total = '<tr>
  <td colspan="4" align="right"><b>Total Cost</b></td>
  <td align="right"><b>'.$total_cost.'/-</b></td>
  </tr>';
  $output =$output.$table_head.$tbody.$total.'</table>';

$tbl = <<<EOF
<style type="text/css">
      table {
        width: 100%;
      }
      th{
        font-weight: bold;
      }
      
</style>
$output
EOF;
return $tbl;
}
// Begin the for furniture code
// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$pdf->Ln(10);
$pdf->Write(0, 'Consumables for the academic year 2019-20', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 11);
$pdf->Ln(5);
// -----------------------------------------------

$data = body_pdf4($pdf,$academic_year,$department);

$pdf->writeHTML($data, true, false, true, false, '');




//Close and output PDF document


$filename="Budget Report of ".$pdf->department." (".$pdf->academic_year.").pdf";
$pdf->Output($filename, 'I');

?>
