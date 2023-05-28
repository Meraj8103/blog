<?php 
include "includes/res.php";
include "includes/config.php";

if (isset($_GET['apt'])) {
	$id=$_GET["apt"];

	$status="accepted";
	
	$upd="UPDATE order_items SET status = '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>on-the-way.php";
              </script>          
           <?php
 	}

}elseif (isset($_GET['del'])) {
	$id=$_GET["del"];
	$status="Delivered";
	$upd="UPDATE order_items SET status= '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>on-the-way.php";
              </script>          
           <?php
 	}
}else{
	?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>";
              </script>          
           <?php
}
 ?>
