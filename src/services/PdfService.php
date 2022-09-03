<?php

namespace App\services;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{

    private Dompdf $domPdf;

    public function __construct()
    {

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);


        $this->domPdf = new Dompdf($pdfOptions);
    }


    public function showPdfFile($html)
    {
        $this->domPdf->loadHtml($html);
        $this->domPdf->setPaper('A4', 'portrait');
        $this->domPdf->render();
        $this->domPdf->stream("Menu.pdf", [
            'Attachment' => false
        ]);
    }

    public function generateBinaryPdf($html) {
        $this->domPdf->loadHtml($html);
        $this->domPdf->render();
        $this->domPdf->output();
    }
}