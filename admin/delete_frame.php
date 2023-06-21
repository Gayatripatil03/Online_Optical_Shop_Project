<?php
include"dbconfig.php";
$n=iud("DELETE FROM `frame` WHERE fid='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='view_frame.php';
		 </script>";
}

?>