<?php
include 'top.php';
include 'data.php';
?>
<script type="text/javascript">
// 5de grafiek  Gas gebruik laatste 24 uur
$(function() {
    $('#chart-D').highcharts({
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
//		tickInterval: 1,
        min: null,
        title: {
            text: ' '
        }
    },

	tooltip: {
		formatter: function() {
        return Highcharts.dateFormat('%H:%M', this.x) + '<br/>' + this.y + ' m3 ';
		}
	},
	
	series: [{
		label: {
			enabled: false
		},
		name: 'Gas',
		color: '#00eeff',
        data: [<?php echo join($datag1, ',') ?>]
	}]
    });

});
</script>
<?php
echo "<table>\n";
echo " <tr>\n";
echo " <th class=\"top\">Gas gebruik</th>\n";
echo " </tr>\n";
echo " <tr>\n";
echo "<td><div id=\"chart-D\" class=\"chart\"></div></td>\n";
echo " </tr>\n";
echo "</table>\n";
echo "<p>\n";


include 'footer.php';
?>

