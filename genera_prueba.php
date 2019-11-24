<?php
require 'libraries/vendor/autoload.php';


use Spipu\Html2Pdf\Html2Pdf;

// Lee el contenido del otro fichero
ob_start();
require_once 'libraries/html2pdf/print_prueba.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8', array(1, 1, 1, 1));
$html2pdf -> writeHTML($html);
$html2pdf -> output('Boletin_Prensa.pdf');/* Falta que guarde la fecha del boletin en el nombre */
$html2pdf->addFont('fonts/militech_r.ttf');
$html2pdf->pdf-> setDefaultFont("Militech");


?>