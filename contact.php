<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact</title>
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
		
.contacttext {
background-color : #000;
color : #fff;
    font-size: 13.5pt;
    font-family: "Courier New";
border: 0px solid;
border-radius: 2px; 
}

h1 {
text-align: center;
margin-bottom: 2%;
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
<div class="well">
<div><h1><? echo $con_titre;?></h1></div>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputLName" class="col-sm-2 control-label"><? echo $con_nom;?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control contacttext" id="inputLName" placeholder="<? echo $con_nom;?>" required>
    </div>
  </div>  
<div class="form-group">
    <label for="inputFName" class="col-sm-2 control-label"><? echo $con_pre;?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control contacttext" id="inputFName" placeholder="<? echo $con_pre;?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputCorp" class="col-sm-2 control-label"><? echo $con_corp;?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control contacttext" id="inputCorp" placeholder="<? echo $con_corp;?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputMail" class="col-sm-2 control-label"><? echo $con_mail;?></label>
    <div class="col-sm-10">
      <input type="email" class="form-control contacttext" id="inputMail" placeholder="<? echo $con_mail;?>" required>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-10">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputSub" class="col-sm-2 control-label" ><? echo $con_sub;?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control contacttext" id="inputSub" placeholder="<? echo $con_sub;?>" required>
    </div>
  </div>    
  
  <div class="form-group">
    <label for="inputText" class="col-sm-2 control-label"><? echo $con_text;?></label>
    <div class="col-sm-10">
      <textarea type="textarea" class="form-control contacttext" rows="3" id="inputText" placeholder="<? echo $con_text;?>" required></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success"><? echo $con_btn;?></button>
    </div>
  </div>
  </div>
  </div>
</form>


	</body>
</html>