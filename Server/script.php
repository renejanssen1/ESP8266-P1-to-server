<?php
?>
<script type="text/javascript">
Highcharts.setOptions({
//    time: {
//        timezoneOffset: <?php echo $toz ?>
//   },
    chart: {
        backgroundColor: {
            linearGradient: [500, 500, 500, 500],
            stops: [
                [0, 'rgb(255, 255, 255)'],
                [1, 'rgb(240, 240, 255)']
            ]
        },
        borderWidth: 0,
        plotBackgroundColor: 'rgba(150, 150, 150, .9)',
        plotShadow: true,
        plotBorderWidth: 1
    },
    title: {
		//text: 'Verbruik vandaag.'
        text: ''
    },
    plotOptions: {
        column: {
			borderWidth: 0,
            stacking: 'normal'
		}	
    },
    yAxis: {
		gridLineWidth: 0.1,
		minorGridLineWidth: 0,
//        min: 0,
        title: {
            text: ''
        }
    }
});
var highchartsOptions = Highcharts.setOptions({
  lang: {
    loading: 'Wordt geladen...',
    months: ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
    weekdays: ['zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'],
    shortMonths: ['jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'],
    exportButtonTitle: "Exporteren",
    printButtonTitle: "Printen",
    rangeSelectorFrom: "Vanaf",
    rangeSelectorTo: "Tot",
    rangeSelectorZoom: "Periode",
    downloadPNG: 'Download als PNG',
    downloadJPEG: 'Download als JPEG',
    downloadPDF: 'Download als PDF',
    downloadSVG: 'Download als SVG',
    resetZoom: 'Reset',
    resetZoomTitle: 'Reset',
    thousandsSep: '.',
    decimalPoint: ','
    }
  }
);
</script>