<?php

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');
ob_start();
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Varun Bhandia');
$pdf->SetTitle('Required Items');
$pdf->SetSubject('Concrete Calculators');
$pdf->SetKeywords('TCPDF, PDF, calculators, test, concrete');

// set default header data
$pdf->setFooterData(array(0,64,0), array(0,64,128));

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

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<h2>ConstructionTips.com</h2>
<p>By Atul Jaiswal<p>
<br><br><br>
EOD;
    
$var1 = round($this->input->get('concrete_req_hole'),2);
$var2 = round($this->input->get('cement'),2);
$var3 = round($this->input->get('course_agg'),2);
$var4 = round($this->input->get('fine_agg'),2);

$required_items='<table cellspacing="0" cellpadding="1" border="1">
<tr>
<td>Concrete Required</td>
<td>'.$var1.'</td>
<td>m3</td>
</tr>
<tr>
<td>Cement Required</td>
<td>'.$var2.'</td><td>Bags</td>
</tr>
<tr>
<td>Course Aggregate Required</td>
<td>'.$var3.'</td>
<td>m3</td>
</tr>
<tr>
<td>Fine Aggregate Required</td>
<td>'.$var4.'</td>
<td>m3</td>
</tr>
</table>';

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $required_items, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('concrete-calculations.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+