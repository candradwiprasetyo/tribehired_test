<?php
include '../admin/lib/config.php';
$act = $_GET['act'];
switch($act){
	case 1: // input update list
	
		$query = mysql_query("insert into update_list values('','".$_GET['email']."','1')");
		echo"<script> window.location='../#update_page'</script>";
		
	break;
}
?>