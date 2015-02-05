<?

?>

<header id="header" class="container">
					<div class="row">
						<div>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img alt="Brand" src="images/favicon.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a target="_self" href="index.php"><?php echo $nav_acc; ?></a></li>
        <li><a target="_self" href="projets.php"><? echo $nav_pro; ?></a></li>
        <li><a target="_self" href="competences.php"><? echo $nav_comp; ?></a></li>
        <li><a target="_self" href="cv.php"><? echo $nav_cv; ?></a></li>
        <li><a target="_self" href="loisirs.php"><? echo $nav_loisirs ?></a></li>
        <li><a target="_self" href="contact.php"><? echo $nav_contact ?></a></li>
		
      </ul>
	  <ul class="nav navbar-nav navbar-right">
	          <li class="dropdown">
          <a href="projets.php" class="dropdown-toggle" data-toggle="dropdown" data-trigger="hover" role="button" aria-expanded="false"><?php echo $nav_lang; ?><span class="caret"></span></a>
	  <ul class="dropdown-menu dropdown-dark" role="menu">
		<?echo "<li><a onclick=\"this.href='choixlang.php?lang=fr&page=$page'\" href=\"#\"><img src=\"images/fr.png\" class=\"img-rounded\"/></a></li>";?>
		<li class="divider"></li>
		<? echo "<li><a onclick=\"this.href='choixlang.php?lang=en&page=$page'\" href=\"#\"><img src=\"images/uk.png\" class=\"img-rounded\"/></a></li></li>"; ?>
		</ul>
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
							<!-- Logo -->
								<!-- <h1><a href="#" id="logo">Portfolio</a></h1> -->
							
							<!-- Nav -->
						<!-- 		<nav id="nav" class="navbar-collapse collape navbar-responsive-collapse">
									<a href="index.php">Homepage</a>
									<a href="threecolumn.html">Three Column</a>
									<a href="twocolumn1.html">Two Column #1</a>
									<a href="projets.php">Projets GMSI</a>
									<a href="onecolumn.html">One Column</a>
								</nav> -->

						</div>
					</div>
							</header>
