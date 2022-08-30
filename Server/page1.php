<?php
include 'top.php';
include 'data.php';
?>
<script type="text/javascript">
// 1 ste grafiek stroom gebruik laatste 24 uur
$(function() {
    $('#chart-A').highcharts({
		chart: {
		renderTo: 'container'
    },
 
	xAxis: {
		type: 'datetime',
		tickInterval: 3600 * 1000,
		labels: {
		formatter: function() {
        return Highcharts.dateFormat('%H', this.value);
		}
		}
	},	

    yAxis: {
		tickInterval: 250,
        min: null,
        title: {
            text: ''
        }
    },
	
	tooltip: {
		formatter: function() {
        return Highcharts.dateFormat('%H:%M', this.x) + '<br/>' + this.y + ' Watt ';
		}
	},


    plotOptions: {
        series: {
            lineWidth: 1
        }
    },
	
	series: [{
		label: {
			enabled: false
		},		
		name: 'Fase 1',
		color: '#FFBEFF',
		yAxis: 0,		  
         data: [<?php echo join($datas1, ',') ?>]
	},{
		label: {
			enabled: false
		},		
		name: 'Fase 2',
		color: '#FF9533',
		yAxis: 0,		  
         data: [<?php echo join($datas2, ',') ?>]
	},{
		label: {
			enabled: false
		},		
		name: 'Fase 3',
		color: '#00EEFF',
		yAxis: 0,		  
         data: [<?php echo join($datas3, ',') ?>]
	},{	
		label: {
			enabled: false
		},	
		name: 'Netto Vermogen',
		color: '#000000',
		yAxis: 0,		  
         data: [<?php echo join($datas4, ',') ?>]	
	}]
    });



});
</script>
<?php
echo "<table>\n";
echo " <tr>\n";
echo " <th class=\"top\">Stroom gebruik</th>\n";
echo " </tr>\n";
echo " <tr>\n";
echo "<td><div id=\"chart-A\" class=\"chart\"></div></td>\n";
echo " </tr>\n";
echo "</table>\n";

echo "<p>\n";



include 'footer.php';
?>


