<?php

namespace App\services;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{

    private Dompdf $domPdf;


    public function __construct()
    {
        $options = new Options();
        $options->setChroot(__DIR__);
        $options->setIsRemoteEnabled(true);
        $options->setIsPhpEnabled(true);
        $options->setPdfBackend('CPDF');

        $this->domPdf = new Dompdf($options);
    }



    public function showPdfFile($html)
    {
        $this->domPdf->loadHtml($html);
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