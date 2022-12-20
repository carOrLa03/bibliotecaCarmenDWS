<?php

namespace biblioteca\app\utils;

use TCPDF;

class Pdf
{
    private TCPDF $pdf;

    public function __construct(){
        $this->pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    }
}