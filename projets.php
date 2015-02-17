<!DOCTYPE HTML>

<html>
	<head>
		<title>Projets</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Liste de mes projets au CESI" />
		<meta name="keywords" content="CESI GMSI projets" />
		<meta name="author" content="Romain Boutinaud" />
		<script src="js/jquery.min.js"></script>

		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="css/carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="css/theme.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="images/favicon.png"/>
<style>


		</style>
<script>
   $(function(){

      // Cycles the carousel to a particular frame 
      $("#slide-one").click(function(){
         $("#myCarousel").carousel(0);
      });      
	  $("#sas").click(function(){
         $("#myCarousel").carousel(0);
      });
      $("#slide-two").click(function(){
         $("#myCarousel").carousel(1);
      });
		$("#start").click(function(){
         $("#myCarousel").carousel(1);
      });
      $("#slide-three").click(function(){
         $("#myCarousel").carousel(2);
      });      
	  $("#evo").click(function(){
         $("#myCarousel").carousel(2);
      });
      $("#slide-four").click(function(){
         $("#myCarousel").carousel(3);
      });           
	  $("#cash1").click(function(){
         $("#myCarousel").carousel(3);
      });      
	  $("#slide-five").click(function(){
         $("#myCarousel").carousel(4);
      });	  
	  $("#cash2").click(function(){
         $("#myCarousel").carousel(4);
      });
   });
</script>

		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body>

		<!-- Header -->

				
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
include("navbar.php");
 ?>




		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-xs-12">
										<section>
<div class="well well-sm">
	   <div style="text-align:center;">
	   
<p>
<h1><? echo $nav_pro; ?></h1>
<? echo $pro_intro; ?><br/><br/>
<span></span></p></div>
<div style="text-align:right">
<span class="aligndoite"><h4> <? echo $pro_enonc; ?></h4></span>
</div>


<div>
<h1><span style="text-align:left"><a target="_self" href="#" id="sas">Projet SAS</a></span></h1>

<span class="aligndroite">
<br/>
<button type="button" class="btn btn-primary btn-xs " data-toggle="modal" data-target="#modalenonSAS"><span class="glyphicon glyphicon-eye-open"></span></button>  
        
<a href="PDF/enon_SAS.pdf" target="_blank" download="enonce_projet_SAS.pdf">
<button type="button" class="btn btn-primary btn-xs "><span class="glyphicon glyphicon-download-alt"></button></a></span></div><br/><br/></span>


<h1><span style="text-align:left"><a target="_self" href="#" id="start">Projet START</a></span></h1>
<span class="aligndroite">
<br/>
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalenonSTART"><span class="glyphicon glyphicon-eye-open"></span></button>          
<a href="PDF/enon_START.pdf" target="_blank" download="enonce_projet_START.pdf"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-download-alt"></button></a></span><br/><br/></span>



<h1><span style="text-align:left"><a target="_self" href="#" id="evo">Projet EVOLUTION</a></span></h1>
<span class="aligndroite"><br/>
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalenonEVO"><span class="glyphicon glyphicon-eye-open"></span></button>          
<a href="PDF/enon_EVO.pdf" target="_blank" download="enonce_projet_EVOLUTION.pdf"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-download-alt"></button></a></span><br/><br/></span>



<h1><span style="text-align:left"><a target="_self" href="#" id="cash1">Cas H1</a></span></h1>
<span class="aligndroite"><br/><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalenonH1"><span class="glyphicon glyphicon-eye-open"></span></button>          
<a href="PDF/enon_H1.pdf" target="_blank" download="enonce_projet_H1.pdf"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-download-alt"></button></a></span></span><br/><br/>


<h1><span style="text-align:left"><a target="_self" href="#" id="cash2">Cas H2</a></span></h1><span class="aligntextdroite"><br/><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalenonH2"><span class="glyphicon glyphicon-eye-open"></span></button>          
<a href="PDF/enon_H2.pdf" target="_blank" download="enonce_projet_H2.pdf"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-download-alt"></button></a></span></span><br/><br/>
</div>
</div>


<div class="col-lg-8 col-xs-12">

   
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
	
	
      <div class="carousel-inner" role="listbox" >
	  <!--- diapo SAS -->
        <div class="item active">
          
          <div class="container">
            <div class="carousel-caption">
			<h1>Projet SAS</h1>
			<h3><? echo $pro_obj; ?></h3>
			<div class="aligngauche">
			<ul class="compli">
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <? echo $pro_SAS_1; ?></span></li>
			<li><span class="glyphicon glyphicon-ok"></span><span>  <? echo $pro_SAS_2; ?></span></li>
			<li><span class="glyphicon glyphicon-ok"></span><span>  <? echo $pro_SAS_3; ?></span></li>
			<li><span class="glyphicon glyphicon-ok"></span><span>  <? echo $pro_SAS_4; ?></span></li>
			</div>
			</ul>
			<h3><? echo $pro_group; ?></h3>
			BOUTINAUD Romain<br/>
			LAMONZIE Yvan
			<h3><? echo $pro_note; ?></h3>
			<span data-container="body" data-toggle="popover" data-placement="left" data-trigger="hover">A</span><br/><br/>
			<center>
			<table><tr><td>
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalSAS"><?echo $pro_visu; ?></button>   </td><td>         
              <a href="PDF/SAS.pdf" target="_blank" download="BOUTINAUD_projet_SAS.pdf"><button type="button" class="btn btn-primary btn-lg"><?echo $pro_dl; ?></button></a></td></tr></table></center>
			  </div>
          </div>
        </div>
		<!-- fin diapo sas-->
		
		<!-- diapo START --->
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<h1>Projet START</h1>
			<h3><?echo $pro_obj;?></h3>
			<div class="aligngauche">
			<ul class="compli">
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_START_1;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_START_2;?></span></li> 
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_START_3;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_START_4;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_START_5;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_START_6;?></span></li>
</div>
			</ul>
			<h3><? echo $pro_group;?></h3>
			BARRE Florian<br/>
			BOUTINAUD Romain<br/>
			FORTAGE Williams
			<h3><?echo $pro_note;?></h3>
			<span data-container="body" data-toggle="popover" data-placement="left" data-trigger="hover">A</span><br/><br/>
			<center>
			
			<table><tr><td>
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalSTART"><?echo $pro_visu;?></button>   </td><td>         
              <a href="PDF/START.pdf" target="_blank" download="BOUTINAUD_projet_START.pdf"><button type="button" class="btn btn-primary btn-lg"><? echo $pro_dl;?></button></a></td></tr></table>
			  
			  </center>
			</div>
          </div>
        </div>
	<!---end diapo -->
	
	<!---diapo evo-->
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<h1>Projet EVOLUTION</h1>
			<h3><?echo $pro_obj;?></h3>
			<div class="aligngauche">
			<ul class="compli">
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_EVO_1;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_EVO_2;?> </span></li> 
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_EVO_3;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_EVO_4;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_EVO_5;?> </span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_EVO_6;?></span></li></ul>
</div>
			
			<h3><? echo $pro_group;?></h3>
			BONNIN Kevin<br/>
			BOUTINAUD Romain<br/>
			JODAR Mathieu
			<h3><?echo $pro_note;?></h3>
			<span data-container="body" data-toggle="popover" data-placement="left" data-trigger="hover">A</span><br/><br/>
			<center>
			<table><tr><td>
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEVO"><?echo $pro_visu;?></button>   </td><td>         
              <a href="PDF/EVO.pdf" target="_blank" download="BOUTINAUD_projet_EVOLUTION.pdf"><button type="button" class="btn btn-primary btn-lg"><?echo $pro_dl; ?></button></a></td></tr></table></center>
			</div>
        </div>
	</div>
      <!-- end diapo evo-->	
	  
	  <!---diapo h1-->
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<h1>Cas H 1ère partie</h1>
			<h3><?echo $pro_obj;?></h3>
			<div class="aligngauche">
			<ul class="compli">
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_H1_1;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_H1_2;?></span></li> 
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_H1_3;?> </span></li></ul>
</div>
			
			<h3><? echo $pro_group;?></h3><br/>
			BOUTINAUD Romain<br/>
			COMERES David<br/>
			LAMONZIE Yvan
			<h3><?echo $pro_note;?></h3>
			<span data-container="body" data-toggle="popover" data-placement="left" data-trigger="hover">A</span><br/><br/>
			<center>
			<table><tr><td>
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalH1"><?echo $pro_visu;?></button>   </td><td>         
              <a href="PDF/H1.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg"><?echo $pro_dl; ?></button></a></td></tr></table></center>          </div>
        </div>
		</div>
	
      <!-- end diapo h1 -->	
	  
	  <!---diapo h2-->
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<h1>Cas H 2nde partie</h1>
			<h3><?echo $pro_obj;?></h3>
			<div class="aligngauche">
			<ul class="compli">
			<li ><span class="glyphicon glyphicon-ok"></span><span> <?echo $pro_H2_1;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_H2_2;?></span></li> 
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_H2_3;?></span></li>
			<li ><span class="glyphicon glyphicon-ok"></span><span>  <?echo $pro_H2_4;?></span></li></ul>
</div>
			
			<h3><? echo $pro_group;?></h3><br/>
			BOUTINAUD Romain<br/>
			COMERES David<br/>
			LAMONZIE Yvan
			<h3><?echo $pro_note;?></h3>
			<span data-container="body" data-toggle="popover" data-placement="left" data-trigger="hover">A</span><br/><br/>
			<center>
			<table><tr><td>
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalH2"><?echo $pro_visu;?></button>   </td><td>         
              <a href="PDF/H2.pdf" target="_blank" download="BOUTINAUD_projet_START.pdf"><button type="button" class="btn btn-primary btn-lg"><?echo $pro_dl; ?></button></a></td></tr></table></center>         </div>
        </div>
		</div>
      <!-- end diapo h2-->
      
    </div>
	
	<!-- /.carousel -->

	</section>

<!--- modals -->

<!-- Modal SAS-->
<div class="modal fade bs-example-modal-lg" id="modalSAS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">SAS</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/SAS.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal SAS-->

<!-- Modal enon SAS-->
<div class="modal fade bs-example-modal-lg" id="modalenonSAS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">SAS</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/enon_SAS.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal enon SAS-->

<!-- Modal START-->
<div class="modal fade bs-example-modal-lg" id="modalSTART" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">START</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/START.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal START-->

<!-- Modal enon START-->
<div class="modal fade bs-example-modal-lg" id="modalenonSTART" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">START</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/enon_START.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal enon START-->

<!-- Modal EVO-->
<div class="modal fade bs-example-modal-lg" id="modalEVO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">EVOLUTION</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/EVO.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal EVO-->

<!-- Modal enon EVO-->
<div class="modal fade bs-example-modal-lg" id="modalenonEVO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">EVO</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/enon_EVO.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal enon EVO-->

<!-- Modal H1-->
<div class="modal fade bs-example-modal-lg" id="modalH1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">H 1ère partie</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/H1.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal H1-->

<!-- Modal enon H1-->
<div class="modal fade bs-example-modal-lg" id="modalenonH1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">H1</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/enon_H1.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal enon H1-->

<!-- Modal H2-->
<div class="modal fade bs-example-modal-lg" id="modalH2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">H 2nde partie</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/H2.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal H2-->

<!-- Modal enon H2-->
<div class="modal fade bs-example-modal-lg" id="modalenonH2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">H2</h4></center>
      </div>
      <div class="modal-body">
        <center><embed src="PDF/enon_H2.pdf" width="100%" height="680" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></embed></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal"><?echo $pro_ferm;?></button></center>
      </div>
    </div>
  </div>
</div>
<!--- end modal enon H2-->
    
 <!-- fin modals -->
																		

							</div>
					</div>
				</div>
			</div>

	</body>
	


<script>
var pro_det = "<?php echo $pro_det ?>";
$(function () {
  $('[data-toggle="popover"]').popover({
  html : true, 
  placement : 'left',
  content : pro_det
  });
});
</script>


<script>
var visu = "<? echo $pro_visu ?>";
$(function () {
  $('[data-toggle="visu"]').popover({
  html : true, 
  placement : 'left',
  content : visu
  });
});
</script>
<script>
var dwl = "<? echo $pro_dl ?>";
$(function () {
  $('[data-toggle="dl"]').popover({
  html : true, 
  placement : 'right',
  content : dwl
  });
});
</script>
<?include('footer.php');?>
</html>