



<?
$ch = curl_init("http://localhost:8081");
$data = array("jsonrpc" => "2.0", "id" => 0, "method" => "receive", "params" => [5000000, 'Frappucino a la Ver'] );
$data_string = json_encode($data);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
$lnaddr = "029cdca30de3325f76ed67a1434fea72b98f947e1f1919a87aabdd8c1ca9fd87f3@lerengebaren.nl:8081"


?>
Test QR code for lightning payment<br>
<img src="qrcode.php?code=<? echo json_decode($result)->result ?>"></img>
<br><br>
Payment not working? Might you need to connect to LN node first:<br>
<img src="qrcode.php?code=<? echo $lnaddr ?>"></img>
<br><br>
Bugs / feedback:
<a href="mailto:gotterspeer@gmail.com">gotterspeer@gmail.com</a>

