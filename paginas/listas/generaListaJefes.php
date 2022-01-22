<?php

require_once '../pdf/vendor/autoload.php';
use Dompdf\Dompdf;
 
function file_get_contents_curl($url) {
    $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
 
    $data = curl_exec($ch);
    curl_close($ch);
 
    return $data;
}
 
$html=file_get_contents_curl("http://localhost/Consejo%20Comunal%20Ambrosio%20Plaza/paginas/listas/lista_jefes.php");
 
$pdf = new DOMPDF(); 
 
$pdf->set_paper("letter", "portrait");
 
 
$pdf->load_html(utf8_decode($html));
 
$pdf->render();
 
$pdf->load_html(ob_get_clean()); 
 
$pdf->stream('Jefes de Familia - Consejo Comunal Comunidad 12 de Octubre.pdf',array('Attachment'=>0));

?>