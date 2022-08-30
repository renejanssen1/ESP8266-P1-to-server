<?php
include 'connect.php';
header("Refresh:300");
setlocale(LC_MONETARY,"nl_NL");
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Meterstanden</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/user.css" rel="stylesheet" />
  <script>
  window.console = window.console || function(t) {};
	</script> 
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no" >
<?php
print "<script src=\"./js/jquery-3.1.1.min.js\"></script>\n";
print "<script src=\"./js/highcharts.js\"></script>\n";
print "<script src=\"./js/highcharts-more.js\"></script>\n";
print "<script src=\"./js/data.js\"></script>\n";
print "<script src=\"./js/series-label.js\"></script>\n";
print "<script src=\"./js/highslide-full.min.js\"></script>";

?>
	<div class="mobile">
		<header>
			<span class="logo">Meterstanden</span>
			<a href="#" class="menuBtn"><span class="lines"></span></a>
			<nav class="mainMenu">
				<ul>
					<li><a href="index.php">Overzicht</a></li>
					<li><a href="page1.php">Stroom</a></li>					
					<li><a href="page2.php">Gas</a></li>			
				</ul>
			</nav>
		</header>
		<div id="main">
		