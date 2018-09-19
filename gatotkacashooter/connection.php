<?php
	$host = "ftp.hebat.web.id";
	$user = "hebatweb_audit";
	$password = "Audit333234";
	$conn = mysql_connect($host,$user,$password);
	if($conn){
		$mydb = mysql_select_db('hebatweb_virtual_fittingroom',$conn);
	}
?>