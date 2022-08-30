<?php
include 'connect.php';

//$tijd= date('i');
//$verschil =  substr("$tijd",-1);
//if ($verschil == 5 or $verschil == 0){
$data = $_GET["data"];
$test = explode(":", $data);

$na = $test[0] /1000;
$da = $test[1] /1000;
$nt = $test[2] /1000;
$dt = $test[3] /1000;
$af = $test[4];
$te = $test[5];

$f1 = $test[6];
$f2 = $test[7];
$f3 = $test[8];

$f1v = $test[9];
$f2v = $test[10];
$f3v = $test[11];

$f1a = $test[12];
$f2a = $test[13];
$f3a = $test[14];

$f1t = $test[15];
$f2t = $test[16];
$f3t = $test[17];
$ga = $test[18] /1000;
	$date = date('Y-m-d');
	$output = "";
	$myFile = "meter-".$date.".log";
	if (!file_exists($myFile)) {
		echo 'File not found';
	}
	$fh = fopen($myFile, 'a') or die("couldn't open");
	$output .= date('H:i:s');
	$output .= '-';

	foreach($_GET as $key=>$val){
		if($key == "data")
		{
			$output .= $val;
		}
	}

	$output .= "\n";
	fwrite($fh, $output );
	fclose($fh);

	$vandaag= strftime("%Y-%m-%d", mktime(0, 0, 0, date("n"), date("j"), date("Y")));
	$date = new DateTime();
	$timestamp = $date->getTimestamp();
	$timestamp = (int)$timestamp /10;
	$timestamp = (int)$timestamp * 10;
	print $timestamp;
	$tijd = (strftime("%H:%M"));
	$sql = "INSERT INTO overzicht(datum, tijd, timestamp, nachtaf, dagaf, nachtterug, dagterug, af, terug, fase1, f1t, v1, a1, fase2, f2t, v2, a2, fase3, f3t, v3, a3, gas)
	VALUES ('$vandaag', '$tijd', '$timestamp', '$na', '$da', '$nt', '$dt', '$af', '$te', '$f1', '$f1t', '$f1v', '$f1a', '$f2', '$f2t', '$f2v', '$f2a', '$f3', '$f3t', '$f3v', '$f3a', '$ga')";
		if ($con->query($sql) === TRUE){
			echo 'Nieuw waardes toegevoegd';
		}else{
			echo 'geen gegevens ontvangen';
		}	
	
//}else{
//	print 'Minuut is niet 0 of 5, maar '.$verschil.' minuten';
//}

?>