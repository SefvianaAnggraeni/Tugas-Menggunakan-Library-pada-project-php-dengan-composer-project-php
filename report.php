<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml('Menggunakan Library DOMpdf untuk Membuat Report dengan DOMPDF');

$dompdf->setPaper('A4', 'Landscape');
$dompdf->render();

$dompdf -> stream('hasil_report.php');

?>
