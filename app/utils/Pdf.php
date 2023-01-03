<?php

namespace biblioteca\app\utils;

use biblioteca\App\exceptions\AppException;
use biblioteca\Core\App;
use TCPDF;

class Pdf
{
    private TCPDF $pdf;
    public function __construct()
    {
    $this->pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    }

    /**
     * @throws AppException
     */
    //$fechaprestamo, $usuario, $fechaDevolucion
    public function new_document(){
        $config = App::get('config')['pdf'];
        $this->pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->pdf->SetHeaderMargin(20);
        $this->pdf->SetCreator($config['pdf_creator']);
        $this->pdf->SetAuthor($config['author']);
        $this->pdf->SetTitle($config['title']);
        $this->pdf->SetAutoPageBreak(TRUE, $config['paginas']);
        $this->pdf->SetFont($config['font'], '', $config['size_font']);
        $this->pdf->SetHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH,PDF_HEADER_TITLE.'061',PDF_HEADER_STRING);
        $this->pdf->AddPage();
        $html = <<< EOT
                <h1>DEVOLUCION</h1>
                <p>Fecha del prestamo: 01/01/2023</p>
                <p>Nombre del libro: Sin nombre</p>
                <p>Usuario: Sin usuario</p>
                <p>Fecha de devolución: $15/02/2023 Hora: 23.00</p>
                
                EOT;

        $this->pdf->writeHTML($html,true,false,true,false,'');
        $this->pdf->lastPage();
        $this->pdf->Output('Dev.pdf', 'I');


    }




}