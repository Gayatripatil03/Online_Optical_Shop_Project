<?php
include"dbconfig.php";
$n=iud("DELETE FROM `glass` WHERE glassid='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='view_life_info.php';
		 </script>";
}

?>