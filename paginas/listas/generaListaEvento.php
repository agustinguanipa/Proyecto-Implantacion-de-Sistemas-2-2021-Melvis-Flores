<?php

	session_start();

	if (!isset($_SESSION['active'])) {
    header('Location: usuario_inicio.php');
    exit();
  }

include '../conexion.php';

require_once '../pdf/vendor/autoload.php';
use Dompdf\Dompdf;

$id = intval($_GET['id']);
 
function file_get_contents_curl($url) {
    $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
 
    $data = curl_exec($ch);
    curl_close($ch);
 
    return $data;
}
 
$html=file_get_contents_curl("http://localhost/Consejo%20Comunal%20Ambrosio%20Plaza/paginas/listas/lista_evento.php");
 
$pdf = new DOMPDF(); 
 
$pdf->set_paper("letter", "portrait");
 
 
$pdf->load_html(utf8_decode($html));
 
$pdf->render();
 
$pdf->load_html(ob_get_clean()); 
 
$pdf->stream('Evento_'.$evento.'.pdf',array('Attachment'=>0));

?>