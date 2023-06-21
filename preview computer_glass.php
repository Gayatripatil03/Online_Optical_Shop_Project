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
			
			<?php
			include"nav.php";
			?>
		</header>
		<!-- end header -->
		
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
					<?php
					$result1=select("SELECT * FROM `customer_problem` 
					INNER JOIN standard_lense on customer_problem.slense=standard_lense.lense_id where customer_problem.userid='".$_SESSION['userid']."' and customer_problem.status='1'");
					while($r1=mysqli_fetch_array($result1))
					{extract($r1);}
				
					$result=select("select * from computer_glass where computer_glassid='".$_REQUEST['id']."'");
					while($r=mysqli_fetch_array($result))
					{extract($r);}

					$result3=select("SELECT * FROM `customer_problem` 
					INNER JOIN premium_lense on customer_problem.plense=premium_lense.p_lense_id where customer_problem.userid='".$_SESSION['userid']."' and customer_problem.status='1'");
					while($r3=mysqli_fetch_array($result3))
					{extract($r3);}
				
					?>

					
						<h3><?=ucwords($name)?></h3>
						<img src="admin/images/Computer Glasses/<?=$image?>" alt="" class="img-responsive" />
			
					</div>

					<div class="col-lg-4">
						<aside class="right-sidebar">
							
							
							
							<div class="widget">
								<h5 class="widgetheading">Information</h5>
								<ul class="tags">
									<li><a href="#">Name-<?=$name?></a></li></br>
									<li><a href="#">Frame Price-<?=$price?>/-</a></li></br>
									<li><a href="#">Standard Lense Price-<?=$sl_charge?>/-</a></li></br>
									<li><a href="#">Standard Lense-<?=$sl_name?></a></li></br>
									<li><a href="#">Premium Lense Price-<?=$pl_charge?>/-</a></li></br>
									<li><a href="#">Premium Lense-<?=$pl_name?></a></li></br>
									<li><a href="#">Right Eye Power-<?=$reye_power?></a></li></br>
									<li><a href="#">Left Eye Power-<?=$leye_power?></a></li></br>
									<li><a href="#">Total Amount-<?=$price+$sl_charge+$pl_charge?>/-</a></li></br>
									
									
								</ul><span style="font-weight:bold">Description-</span><p style="text-align:justify"> <?=$description?></p>
								<a  href="payment.php?m=<?=$price+$sl_charge+$pl_charge?>"><button class="btn btn-success">Payment
								</button>
							</div>
						</aside>
					</div>

				</div>
			</div>
		</section>

		<?php
		include"footer.php";
		?>

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