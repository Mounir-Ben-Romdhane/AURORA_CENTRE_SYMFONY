<?php

 
namespace App\Entity;

use TCPDF;

class PdfGeneratorService
{
    public function generatePdf($html)
{
    $pdf = new TCPDF();
    $pdf->AddPage();
    
    // Add logo to the PDF
    $image_file = 'assets/slides-3.jpg';
    list($w, $h) = getimagesize($image_file);
    $pdf->Image($image_file, 10, 10, $w/10, $h/10, '', '', 'T', false, 300, '', false, false, 0, false, false, false);
    
    // Positionner les données en dessous de l'image
    $pdf->SetXY(10, $h/4 + 10);
    
    $pdf->writeHTML($html, true, false, true, false, '');
    return $pdf->Output('document.pdf', 'S');
}}