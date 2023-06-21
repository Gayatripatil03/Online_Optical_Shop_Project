<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sailor - Bootstrap 3 corporate template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
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
		<section id="featured" class="bg">
			<!-- start slider -->


			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="main-slider flexslider">
							<ul class="slides">
								<li>
									<img src="img/slides/flexslider/4.jpg" alt="" />
									<div class="flex-caption">
										<h3>Modern Design</h3>
										<p>Modern and new Elegant designs that will suit you and give you a new look</p>
										<a href="#" class="btn btn-theme">Learn More</a>
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/5.jpg" alt="" />
									<div class="flex-caption">
										<h3>Your Choice, Your Style</h3>
										<p> Pick up a frame and make it your Style with your choice. </p>
										<a href="#" class="btn btn-theme">Learn More</a>
									</div>
								</li>
								
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>


		</section>
		

		<section id="content">
			

			
			
			<!-- end divider

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-sm-6 col-lg-6">
								<h4>About our company</h4>
								<p><strong>Meliore inciderint qui ne. Suas cotidieque vel ut lobortis reformidans duo</strong></p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit iste exercitationem praesentium deleniti nostrum laborum rem id nihil tempora. Adipisci ea commodi unde nam placeat cupiditate quasi a ducimus rem consequuntur ex eligendi minima
									voluptatem assumenda voluptas quidem sit maiores odio velit voluptate
								</p>
								<p>
									Mel explicari adipiscing consectetuer no, no mel apeirian scripserit repudiandae, ad assum mundi scribentur eam. Graecis offendit phaedrum eu his, eius ferri quidam eos ad, quis delenit vel ei. Alia modus facete te eos, eu tation appellantur per
								</p>
							</div>
							<div class="col-sm-6 col-lg-6">
								<h4>Projects</h4>
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										40% Complete (success)
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
										20% Complete
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										60% Complete (warning)
									</div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
										80% Complete
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- divider -->
			
			<!-- end divider -->

			<!-- parallax  -->
			

			
			<!-- divider -->
			
			<!-- end divider -->

			<!-- Portfolio Projects -->
			<div class="container marginbot50">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Recent</h4>

						


						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
								<?php
							$result=select("select * from glass ");
							while($r=mysqli_fetch_array($result))
							{extract($r);
							?>
								<li class="cbp-item graphic">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="admin/images/<?=$image?>" alt="" style="width:250px;height:100px"/>
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="admin/images/<?=$image?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title"><?=$name?></div>
									<div class="cbp-l-grid-projects-desc" style="font-weight:bold;color:red">Price-<?=$price?>/-</div>
								</li>
								
								<?php
							}
								?>
								
								
								
								
							</ul>
						</div>

						

					</div>
				</div>
			</div>


			

		</section>

		<?php include"footer.php";?>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="plugins/flexslider/flexslider.config.js"></script>
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
