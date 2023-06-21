<?php
include"dbconfig.php";
$n=iud("DELETE FROM `problem` WHERE problemid='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='view_problem.php';
		 </script>";
}

?>