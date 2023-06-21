<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
			<?php
			if(isset($_SESSION['login']))
{
?>
	<li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>D A S H B O A R D</span>
                    </a>
                </li>

				<li>
                    <a class="active" href="add_glasses.php">
                        <i class="fa fa-th"></i>
                        <span>A D D &nbsp;&nbsp;&nbsp; G L A S S E S  </span>
                    </a>
                </li>
				
				
				<li>
                    <a class="active" href="view_life_info.php">
                        <i class="fa fa-book"></i>
                       <span>V I E W &nbsp;&nbsp;&nbsp; G L A S S E S</span>
                     </a>
                </li>
				<li>
                    <a class="active" href="add_problem.php">
                        <i class="fa fa-th"></i>
                        <span>A D D &nbsp;&nbsp;&nbsp; G L A S S &nbsp;&nbsp;&nbsp; T Y P E </span>
                    </a>
                </li><li>
                    <a class="active" href="view_problem.php">
                        <i class="fa fa-book"></i>
                       <span>V I E W &nbsp;&nbsp;&nbsp; T Y P E</span>
                     </a>
                </li><li>
                    <a class="active" href="view_sale.php">
                        <i class="fa fa-book"></i>
                       <span>V I E W &nbsp;&nbsp;&nbsp; S A L E &nbsp;&nbsp;&nbsp;P R O D U C T</span>
                     </a>
                </li>
				
				<!--<li>
                    <a class="active" href="add_expense.php">
                        <i class="fa fa-th"></i>
                        <span>Add Expense</span>
                    </a>
                </li><li>
                    <a class="active" href="view_expence.php">
                        <i class="fa fa-book"></i>
                        <span>View Expence</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="mail_compose.php">
                        <i class="fa fa-book"></i>
                        <span>Use Calculater</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="currency.php">
                        <i class="fa fa-book"></i>
                        <span>Use Currency Converter</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="chartjs.php">
                        <i class="fa fa-book"></i>
                        <span>View Graph</span>
                    </a>
                </li>--><li>
                    <a class="active" href="logout.php">
                        <i class="fa fa-book"></i>
                        <span>L O G O U T</span>
                    </a>
                </li>

	
<?php
}
else
{
?>

<li>
                    <a href="registration.php">
                        <i class="fa fa-user"></i>
                        <span>Signup</span>
                    </a>
                </li>
<li>
                    <a href="login.php">
                        <i class="fa fa-user"></i>
                        <span>Login </span>
                    </a>
                </li>



<?php	
}
?>
                
				
                
               
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>