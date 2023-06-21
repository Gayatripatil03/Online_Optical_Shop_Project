<?php
include"admin/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Bootstrap 3 corporate template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />


	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />


	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>



	<div id="wrapper">

		<!-- start header -->
		<header>
			

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.php"><img src="img/logo1.png" alt="" width="70" height="70" /></a>
					</div>
					<?php include"nav.php";?>
				</div>
			</div>
		</header>
		<!-- end header -->
		
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
							<div class="dropdown">
							  <div id="myDropdown" class="dropdown-content">
							  <label class="heading">Categories:</label>
								<a href="portfolio_eyeglasses.php">Eye Glasses <label>   | </label></a>
								<a href="portfolio_sunglasses.php">Sun Glasses  <label>   | </label></a>
								<a href="portfolio_computerglasses.php">Computer Glasses  <label>   | </label></a>
								<a href="portfolio_kidsglasses.php">Kids Glasses  <label>   | </label></a>
								<a href="portfolio_progressiveglasses.php">Progressive Glasses</a>
								<br> <br>
							  </div>
							</div>
						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
							<?php
							$result=select("select * from kids_glass");
							while($r=mysqli_fetch_array($result))
							{extract($r);
							?>
								
								<a href="preview.php?id=<?=$kids_glassid?>"><li class="cbp-item graphic">
									<div class="cbp-caption">
										<div>
											<img src="admin/images/Kids Glasses/<?=$image?>" alt="" style="width:250px;height:100px"/>
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="admin/images/Kids Glasses/<?=$image?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
												</div>
												<div class="cbp-l-caption-body">
													<a href="preview kids_glass.php?id=<?=$kids_glassid?>" class="cbp-l-caption-buttonRight">Buy Now</a>													
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title"><?=$name?></div>
									<div class="cbp-l-grid-projects-desc" style="font-weight:bold;color:red">Price-<?=$price?>/-</div>
								</li>
								</a>
								<?php
							}
								?>
								
								
								
								
								
							</ul>
						</div>

						<div class="cbp-l-loadMore-button">
							<a href="ajax/loadMore.php" class="cbp-l-loadMore-button-link">LOAD MORE</a>
						</div>

					</div>
				</div>
			</div>
		</section>

		<?php include"footer.php";?>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>
