<!DOCTYPE HTML>

<html>
	<head>
		<title>Formation</title>
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
		<link rel="stylesheet" href="js/skillset.css">
		<script src="js/skillset.js"></script>
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

<div class="col-xs-2 col-lg-2"></div>
<div class="col-xs-8 col-lg-8">
<h1><? echo $nav_comp; ?></h1><br/>
<? echo $comp_des;?><br/><br/><br/>
<div id="skillset"> </div></div>
<div class="col-xs-2 col-lg-2"></div>
</div>
	</body>
	<script type="text/javascript">

var detaillin = "<? echo $comp_lin; ?>"; 
var headana = "<? echo $comp_ana_T; ?>"; 
var detailana = "<? echo $comp_ana_D; ?>"; 
var headang = "<? echo $comp_ang_T; ?>"; 
var detailang = "<? echo $comp_ang_D; ?>"; 


 
var object = [
 
{
'headline':'Windows Server',
'value':9,
'length':10,
'description': 'AD, ADCS, DNS, Exchange, DHCP, RDP'
},
{
'headline':'UNIX/LINUX Server',
'value':8,
'length':10,
'description':  detaillin
},
{
'headline':'TCP/IP',
'value':6,
'length':10,
'description':  ''
},
{
'headline':'VOIP',
'value':5,
'length':10,
'description':  ''
},
{
'headline':headana,
'value':8,
'length':10,
'description':  detailana
 
},
{
'headline':'Scripting',
'value':8,
'length':10,
'description':  'PHP, Bash, Powershell'
},
{
'headline':headang,
'value':9,
'length':10,
'description':  detailang
}


 
];
 
$(document).ready(function(){
 
$("#skillset").skillset({
 
object:object,
duration:40
 
});
 
});
 
</script>
</html>