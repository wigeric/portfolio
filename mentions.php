<!DOCTYPE HTML>

<html>
	<head>
		<title>Mentions légales</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Mentions légales" />
		<meta name="keywords" content="mentions légales" />
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
<h1>Mentions légales</h1>
<h2>Relatives à l'éditeur de contenu</h2>
<ul>
<li><span class="gras underline">Nom</span> : BOUTINAUD</li>
<li><span class="gras underline">Prénom</span> : Romain</li>
<li><span class="gras underline">Adresse</span> : 68 rue Huguerie, 33000 Bordeaux</li>
<li><span class="gras underline">Téléphone</span> : 06xxxxxxxx</li>
</ul>
<h2>Relatives à l'herbegeur</h2>
<ul>
<li><span class="gras underline">Nom</span> : OVH</li>
<li><span class="gras underline">adresse</span> : 2 Rue Kellermann, ROUBAIX</li>
<li><span class="gras underline">téléphone</span> : +33 8 99 70 17 61</li>
<li><span class="gras underline">fax</span> : +33 3 20 20 09 58</li>
<li><span class="gras underline">e-mail</span> : support@ovh.net</li>
<li><span class="gras underline">website</span> : <a href="http://www.ovh.com" target="_blank">http://www.ovh.com</a></li>
</ul>
</div>
</div>



	</body>
	<?include('footer.php');?>
</html>