<!DOCTYPE HTML>

<html>
	<head>
		<title>CV</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
<div class="row">
<div class="col-xs-5 col-lg-5 "></div>


<div class="col-xs-2 col-lg-2 well well-sm incenter">
<?php

if ($locale == "en.php")
	{
	echo "<h1>CV PDF</h1>";
	echo "<button type=\"button\" class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#modalCVEN\"><span class=\"glyphicon glyphicon-eye-open\"></span></button>          
<a href=\"PDF/CV_EN.pdf\" target=\"_blank\" download=\"BOUTINAUD_Romain_CV.pdf\"><button type=\"button\" class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-download-alt\"></button></a></span><br/><br/></span>";
	}
else 
	{
	echo "<h1>CV PDF</h1>";
	echo "<button type=\"button\" class=\"btn btn-primary \" data-toggle=\"modal\" data-target=\"#modalCV\"><span class=\"glyphicon glyphicon-eye-open\"></span></button>          
<a href=\"PDF/CV.pdf\" target=\"_blank\" download=\"BOUTINAUD_Romain_CV.pdf\"><button type=\"button\" class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-download-alt\"></button></a></span><br/><br/></span>";
	}

?>
</div>
<div class="col-xs-5 col-lg-5 "></div>
</div>

<div class="container">
<div class="row">
<div class="col-lg-12 jumbotron ">
<table class="table table-striped table-hover table-bordered">
<tr><th><? echo $cv_ann; ?></th><th><? echo $cv_tra; ?></th><th><? echo $cv_for; ?></th></tr>
<tr><th>2013-2015</th><td><? echo $cv_2015_t ;?></td><td><? echo $cv_2015_f; ?></td></tr>
<tr><th>2012-2013</th><td><? echo $cv_2013 ;?></td><td></td></tr>
<tr><th>2012</th><td><? echo $cv_2012 ;?></td><td></td></tr>
<tr><th>2009-2011</th><td><? echo $cv_2011 ;?></td><td></td></tr>
<tr><th>2006</th><td></td><td><? echo $cv_2006; ?></td></tr>
</table>
</div>
</div>
</div>


	<!-- Modal CV EN-->
<div class="modal fade bs-example-modal-lg" id="modalCVEN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">START</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/CV_EN.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal CV EN-->
	<!-- Modal CV-->
<div class="modal fade bs-example-modal-lg" id="modalCV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">START</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/CV.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal CV-->

	</body>
</html>