<!DOCTYPE HTML>

<html>
	<head>
		<title>CV</title>
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
<div class="jumbotron">
<h1>
a
b
c
d
e
f
g
h
i
j
k
l
m
n
o
p
q
r	
s
t
u
v
wxyz
<br/>
ABCDEFGHIJKLMNOPQRSTUVWXYZ
</div>


<?include('footer.php');?>
</html>