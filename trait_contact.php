<!DOCTYPE HTML>

<html>
	<head>
		<title>CV</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>

		<script src="js/init.js"></script>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="css/carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link href="css/theme.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="images/favicon.png"/>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<style>
body {
color: #fff;
}
	</style>

	</head>
	<body>

				
<?php

if ($_POST['mail_pro'] != "")
	{
	header('location:contact.php?error=robot');
	}
else
	{

echo $_POST['nom'];
echo $_POST['prenom'];
echo $_POST['entreprise'];
echo $_POST['mail'];
echo $_POST['sujet'];
echo $_POST['texte'];
	}

$message = str_replace("\n.", "\n..", $_POST['texte']);
$sujet = "Contact portfolio ".$_POST['sujet'];
$envoi = "Nom : $_POST[nom]<br/>Prénom : $_POST[prenom]<br/>Entreprise : $_POST[entreprise]<br/>Mail : $_POST[mail]<br/>Message : $message";

$headers = "From: \"Romain Boutinaud\"<romain@boutinaud.fr>\n";
$headers .= "Reply-To: romain@boutinaud.fr\n";
$headers .= "Content-Type: text/html; charset=\"UTF-8\"";


if (isset($_POST['env']))
	{
	$headers .= "Bcc:romainboutinaud@yahoo.fr\n";
	$envoi = wordwrap($envoi, 70, "\r\n");
	mail("$_POST[mail]", $sujet, $envoi,$headers);
	header('location:contact.php?envoi=1');
	}
else 
	{
	$envoi = wordwrap($envoi, 70, "\r\n");
	mail("romainboutinaud@yahoo.fr", $sujet, $envoi,$headers);
	header('location:contact.php?envoi=2');
	}


	
?>




	</body>
</html>