<?php
    require_once('tcpdf/tcpdf.php');
    $pdf=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->SetFont('msungstdlight', '', 10);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->AddPage();

    $html='Test Hello PDF 你好';

    $pdf->writeHTML($html);
    
    $pdf->Output("test.pdf", 'I');















?>