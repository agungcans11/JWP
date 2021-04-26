<?php

Class Fungsi {

    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function pdfGenerator($html, $filename, $paper, $orientation){
        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename, array('Attachment' => 0));
    }
}