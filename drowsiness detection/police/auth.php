<?php
session_start();
if(!isset($_SESSION['SESS_POLICE_ID']) || (trim($_SESSION['SESS_POLICE_ID']) == '')) {
	header("location:../");
	exit();
}

?>
