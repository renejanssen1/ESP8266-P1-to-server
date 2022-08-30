<?php
include 'top.php';

// uitlezen gegevens voor header
$sql="select * from overzicht ORDER BY id DESC limit 1";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$naf = $row["nachtaf"];
	$daf = $row["dagaf"];
	$nterug = $row["nachtterug"];
	$dterug = $row["dagterug"];
	$af = $row["af"];
	$terug = $row["terug"];
	$fase1 = $row["fase1"];
	$fase2 = $row["fase2"];
	$fase3 = $row["fase3"];
	$f1t = $row["f1t"];
	$f2t = $row["f2t"];
	$f3t = $row["f3t"];
	$v1 = $row["v1"];
	$v2 = $row["v2"];
	$v3 = $row["v3"];
	$a1 = $row["a1"];
	$a2 = $row["a2"];
	$a3 = $row["a3"];
	$gas = (int)$row["gas"];
	$totaaln = $naf - $nterug;
	$totaald = $daf - $dterug;
	$totaal = $naf + $daf - $nterug - $dterug ;
mysqli_free_result($result);
?>

<table>
	<col style="width: 25%;" /> 
	<col style="width: 15%;" /> 
	<col style="width: 10%;" /> 
	<col style="width: 25%;" />   
	<col style="width: 15%;" />  
	<col style="width: 10%;" /> 
	<tr>
		<th colspan="6" class="top">Meterstanden</th>
	</tr>
	<tr>
		<td class="l">&nbsp;Nachtstroom in</td>
		<td class="r"><?php $a = $naf; print (int)$a; ?></td>
		<td class="l">&nbsp;&nbsp;kWh</td>
		<td class="l">Nachtstroom uit</td>
		<td class="r"><?php $c = $nterug; print (int)$c?></td>
		<td class="l">&nbsp;&nbsp;kWh</td>	
	</tr>
	<tr>
		<td class="l">&nbsp;Dagstroom in</td>
		<td class="r"><?php $b = $daf; print (int)$b;?></td>
		<td class="l">&nbsp;&nbsp;kWh</td>
		<td class="l">Dagstroom uit</td>
		<td class="r"><?php $d = $dterug; print (int)$d;?></td>
		<td class="l">&nbsp;&nbsp;kWh</td>		
	</tr>
	<tr>
		<td class="l">&nbsp;Actueel</td>
		<?php
		$verschil = $af - $terug;
		if ($verschil>0) {
			print '<td class="r">'.(int)$verschil.'</td>';
		}else{
			print '<td class="celpos">'.(int)$verschil.'</td>';
		}
		?>		
		<td class="l">&nbsp;&nbsp;Watt</td>
		<td class="l">Gas</td>
		<td class="r"><?php print (int)$gas; ?></td>
		<td class="l">&nbsp;&nbsp;m3</td>		
	</tr>
</table>


<table>
	<col style="width: 16%;" /> 
	<col style="width: 17%;" /> 	
	<col style="width: 16%;" /> 
	<col style="width: 17%;" /> 
	<col style="width: 17%;" /> 
	<col style="width: 17%;" /> 	
	<tr>
		<th colspan="2" class="top2">Actueel Fase 1</th>
		<th colspan="2" class="top1">Actueel Fase 2</th>
		<th colspan="2" class="top3">Actueel Fase 3</th>		
	</tr>
	<tr>
		<?php
		if ($fase1>0) {
			print '<td class="r">'.(int)$fase1.'</td>';
		}else{
			print '<td class="celpos">'.(int)$f1t.'</td>';
		}
		?>
		<td class="l">&nbsp;&nbsp;Watt</td>
		<?php
		if ($fase2>0) {
			print '<td class="r">'.(int)$fase2.'</td>';
		}else{
			print '<td class="celpos">'.(int)$f2t.'</td>';
		}
		?>
		<td class="l">&nbsp;&nbsp;Watt</td>	
		<?php
		if ($fase3>0) {
			print '<td class="r">'.(int)$fase3.'</td>';
		}else{
			print '<td class="celpos">'.(int)$f3t.'</td>';
		}
		?>
		<td class="l">&nbsp;&nbsp;Watt</td>	
	</tr>
	<tr>
		<td class="r"><?php print ''.$v1.''; ?></td>
		<td class="l">&nbsp;&nbsp;Volt</td>
		<td class="r"><?php print ''.$v2.''; ?></td>
		<td class="l">&nbsp;&nbsp;Volt</td>		
		<td class="r"><?php print ''.$v3.''; ?></td>
		<td class="l">&nbsp;&nbsp;Volt</td>	
	</tr>
	<tr>
		<td class="r"><?php print ''.$a1.''; ?></td>
		<td class="l">&nbsp;&nbsp;Amp</td>
		<td class="r"><?php print ''.$a2.''; ?></td>
		<td class="l">&nbsp;&nbsp;Amp</td>		
		<td class="r"><?php print ''.$a3.''; ?></td>
		<td class="l">&nbsp;&nbsp;Amp</td>	
	</tr>		
</table>

<?php
include 'footer.php';
?>