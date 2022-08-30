<?php
// laatste id's bepalen
$sql="select * from overzicht ORDER BY id DESC limit 1";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$id = $row["id"];

// 24 uurs stroom en gas
$sql = "select * from overzicht";
if ($result=mysqli_query($con,$sql)) {
  $rowcount=mysqli_num_rows($result);
  if ($rowcount <=288) {//288
	  $id = $id-$rowcount+1;  
	  $tel1 = $rowcount;
  }else{
	  $id = $id-288;  //288
	  $tel1 = 289;//289
  }
} 

for($i=$id; $i<($id+$tel1); $i++) // elke 5 minuten +1
	{
	$sql="select * from overzicht WHERE id = '$i'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if ($tz == 1){
		$datetime = ($row["timestamp"]+3600)*1000;
	}else{
		$datetime = ($row["timestamp"]+7200)*1000;
	}
	$af = $row["af"];
	$terug = $row["terug"];
	$netto = $af - $terug;
	$fase1 = $row["fase1"];
	$fase2 = $row["fase2"];
	$fase3 = $row["fase3"];
	if ($terug > 0){
	  $fase3 = -$terug;
	}
	$gas = $row["gas"];

	mysqli_free_result($result);
	$datas1[$nrs1] = "[$datetime, $fase1]";
	$datas2[$nrs2] = "[$datetime, $fase2]";
	$datas3[$nrs3] = "[$datetime, $fase3]";
	$datas4[$nrs4] = "[$datetime, $netto]";	
	$datag1[$nrg1] = "[$datetime, $gas]"; 
	$nrs1++;
	$nrs2++;		
	$nrs3++;
	$nrs4++;	
	$nrg1++;

	}


include 'script.php';
?>