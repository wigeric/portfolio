<!DOCTYPE HTML>

<html>
	<head>
		<title>Loisirs</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Page recensent mes loisirs" />
		<meta name="keywords" content="loisirs hobbies" />
		<meta name="author" content="Romain Boutinaud" />
		
		<script src="js/jquery.min.js"></script>


		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="css/carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link href="css/theme.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="images/favicon.png"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">


		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<style>
h1 {
text-align: center;
font-family: "Bangers";
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
<div class="visible-xs-inline col-xs-12 well incenter">

<a href="#musique"><i class="fa fa-music fa-3x iconloi"></i></a>
<a href="#lecture"><i class="fa fa-book fa-3x iconloi"></i></a>
<a href="#jouer"><i class="fa fa-gamepad fa-3x iconloi"></i></a>
<a href="#empire"><i class="fa fa-empire fa-3x iconloi"></i></a>

</div>
<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 ">
</div>
<div class="hidden-xs col-sm-2 col-md-2 col-lg-2 well fixnav">
<span><h1><a target="_self" href="#musique"><? echo $loi_musT;?></a></h1></span>
<br/><br/>
<span><h1><a target="_self" href="#lecture"><? echo $loi_lecT;?></a></h1></span><br/><br/>
<span><h1><a target="_self" href="#jouer"><? echo $loi_jouT;?></a></h1></span><br/><br/>
</div>

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
<!-- musique -->
<div id="musique" class="well well-sm"><h1><? echo $loi_musT;?></h1><div><?echo $loi_musD;?></div><span><br/><br/> <center><iframe  max-width="20%" height="200" class="embed-responsive-item" src="http://www.youtube-nocookie.com/v/H1L4sVxuKZg?playlist=YR5ApYxkU-U,QsNft5ftYSs,CBiui2TJ4s0,FO566BKY2Jc" frameborder="0" ></iframe></center></div>

<!-- lecture -->
<div id="lecture" class="well well-sm ">
<h1> <? echo $loi_lecT;?></h1><div><? echo $loi_lecD;?></div>
</div>

<!-- Jouer -->
<div id="jouer" class="well well-sm ">
<h1> <? echo $loi_jouT;?></h1><div><? echo $loi_jouD;?></div>
</div>

<!-- Empire -->
<div id="empire" class="well well-sm visible-xs-block">
<h1 class="starwars"> <? echo $loi_empT;?></h1><div><? echo $loi_empD; ?></div>
</div>


</div>



</div>
	</body>
	<?include('footer.php');?>
</html>