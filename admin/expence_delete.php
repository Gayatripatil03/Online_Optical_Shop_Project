<?php
include"dbconfig.php";
$n=iud("DELETE FROM `expence` WHERE exid='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='view_expence.php';
		 </script>";
}

?>