<?
$code = $_GET['code'];
include('phpqrcode.php');

QRcode::png($code);

?>
