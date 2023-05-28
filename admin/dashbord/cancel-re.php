<?php 
include "includes/res.php";
include "includes/config.php";

if (isset($_GET['n'])) {
	$id=$_GET["n"];

	$status="pending";
	
	$upd="UPDATE order_items SET status = '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>cancel-request.php";
              </script>          
           <?php
 	}

}elseif (isset($_GET['y'])) {
	$id=$_GET["y"];
	$status="canceled";
	$upd="UPDATE order_items SET status= '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>cancel-request.php";
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
