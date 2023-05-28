<?php 
include "includes/res.php"; 
include "includes/config.php";
$id=$_GET['id'];
$pub=$_SESSION['pub_id'];
$sql="DELETE FROM post WHERE id='{$id}' and publicer='{$pub}'";

if ($conn->query($sql)) {
?>
  		<script type="text/javascript">
	 	window.location = "post.php";
		</script>
 <?php 	
}

 ?>