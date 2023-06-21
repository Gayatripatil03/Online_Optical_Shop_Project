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
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form role="form" method="post"  class="register-form">
							<h2>CHOOSE LENSE TYPE<small></small></h2>
							<hr class="colorgraph">
							
								<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">Standard  Lenses
										<select class="form-control input-lg" name="slense"  tabindex="5">
										<option>Select Any One 
										</option><?php
										$t=select("select * from standard_lense");
										while($r=mysqli_fetch_array($t))
										{extract($r);
										?>
										<option value="<?=$r[0]?>" type="checkbox"><?=ucwords($r[1])?>
										</option>
										<?php
										}
										?>
										</select>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">Premium Lenses
										<select class="form-control input-lg" name="plense"  tabindex="5">
										<option>Select Any One 
										</option><?php
										$t=select("select * from premium_lense");
										while($r=mysqli_fetch_array($t))
										{extract($r);
										?>
										<option value="<?=$r[0]?>" type="checkbox"><?=ucwords($r[1])?>
										</option>
										<?php
										}
										?>
										</select>
									</div>
								</div>
								</div>
								
								
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">Left Eye Power
										<input type="text" name="leye_power"  class="form-control input-lg" placeholder="Left Eye Power" tabindex="6">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">Right Eye Power
										<input type="text" name="reye_power"  class="form-control input-lg" placeholder="Right Eye Power" tabindex="6">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12"><input type="submit" value="Confirm" name="register" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
							</div>
						</form>
						<?php
						if(isset($_REQUEST['register']))
						{
							extract($_REQUEST);
							 $userid=$_SESSION['userid'];
							
							$n=iud("INSERT INTO `customer_problem`(`slense`, `plense`, `leye_power`,`reye_power`, `userid`) VALUES 
							('$slense','$plense','$leye_power','$reye_power','$userid') ");
							if($n==1)
							{
								echo"<script>alert('Successful add the Lense Information!  Now Choose Any Frame');
								window.location='portfolio.php';
								</script>";
							}
						}
						?>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
							</div>
							<div class="modal-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
			
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
