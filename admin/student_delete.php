<?php
include"dbconfig.php";
$n=iud("UPDATE `student_info` SET `Status`=b'0' WHERE Student_info_ID='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='student_info.php';
		 </script>";
}

?>