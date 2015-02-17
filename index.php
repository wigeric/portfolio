<!DOCTYPE HTML>

<html>
	<head>
		<title>Accueil</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Accueil de mon portfolio" />
		<meta name="keywords" content="Accueil boutinaud portfolio" />
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
				<div id="banner">
					
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6">
									<img src="images/servers2.png" class="img-responsive img-rounded" alt="" />
							</div>
							<div class="col-xs-12 col-md-6">
									<div class="bangers">Romain BOUTINAUD</div><br/><p class="courrier"><?echo $home_gmsi; ?> </p>

									<!--<a href="#" class="btn btn-success"><?// echo $home_qui; ?></a>-->

							</div>
						</div>
					</div>
				</div>
			</div>

		


	</body>
<?include('footer.php');?>
</html>