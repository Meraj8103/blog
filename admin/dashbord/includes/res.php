<?php 

session_start();

if(!isset($_SESSION["email"])){
	if (!isset($_SESSION["name"])) {
		// code...
	 header("Location: ../index.php");
	}
}
 ?>