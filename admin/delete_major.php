<?php
include"dbconfig.php";
$n=iud("UPDATE `Subject` SET `status`=b'0' WHERE SubjectID='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='view_Subject.php';
		 </script>";
}

?>