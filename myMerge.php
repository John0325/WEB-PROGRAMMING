<?php
    include('PDFMerger.php');

    $pdf=new PDFMerger;
    $pdf->addPDF('1.pdf','all');
    $pdf->addPDF('2.pdf','all');

    $pdf->merge('file','new.pdf');
?>