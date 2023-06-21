<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="dropdown ">
							<?php
							if(isset($_SESSION['login']))
							{?>
								<a href="index.php">Home</a> 
								<li><a href="problem.php">Choose Lense</a></li>
								<li><a href="portfolio.php">Choose Frames</a></li>
							
							<li><a href="contact.php">Contact</a></li>
							<li><a href="logout.php">Logout</a></li>
								<?php
							}else
							{
								?>
</li><li class="dropdown ">
								<a href="register.php">Register</a> 
								

							</li>
							<li class="dropdown ">
								<a href="login.php">Login</a> 
								

							</li>

								<?php
							}
							?>
								
								

							
							
							
						</ul>
					</div>