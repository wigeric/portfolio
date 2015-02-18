<!DOCTYPE HTML>

<html>
	<head>
		<title>Liens</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Liens" />
		<meta name="keywords" content="Liens" />
		<meta name="author" content="Romain Boutinaud" />
		<script src="js/jquery.min.js"></script>

		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="css/carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link href="css/theme.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="images/favicon.png"/>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<style>

	</style>

	</head>
	<body>

				
<?php
if ((isset($_COOKIE['language'])) AND ($_COOKIE['language'] == "en"))
	{
	$locale = 'en.php';
	}
else 
	{
	$locale = 'fr.php';
	}

include($locale);
$page = basename($_SERVER['PHP_SELF']); 
include('navbar.php');
?>
<div class="container">
<div class="jumbotron">

<h1>Portfolios</h1>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://www.kevinbonnin.fr" class="linkext" target="_blank">Kevin BONNIN </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://dcomeres.myds.me/portfolio" class="linkext" target="_blank">David COMERES </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://www.heuzef.com" class="linkext" target="_blank">Florent HEUZE </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://www.jodar-mathieu.com" class="linkext" target="_blank">Mathieu JODAR </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://yvan-lamonzie.ovh/" class="linkext" target="_blank">Yvan LAMONZIE </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://rudyremy.esy.es" class="linkext" target="_blank">Rudy REMY </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://www.vsanroma.zz.mu" class="linkext" target="_blank">Vincent SANROMA </a></div></div><br/>

<div class="row">
<div class="col-lg-5 col-xs-12 divblack"><a href="http://vincendeauro.com" class="linkext" target="_blank">Romain VINCENDEAU </a></div></div><br/>


</div>
</div>
</div>


	</body>
	<?include('footer.php');?>
</html>