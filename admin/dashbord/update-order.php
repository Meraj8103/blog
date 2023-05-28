<?php 
include "includes/res.php";
include "includes/config.php";

if (isset($_GET['accept'])) {
	$id=$_GET["accept"];

	$status="accepted";
	
	$upd="UPDATE order_items SET status = '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>pending_orders.php";
              </script>          
           <?php
 	}

}elseif (isset($_GET['cancel'])) {
	$id=$_GET["cancel"];
	$status="canceled";
	$upd="UPDATE order_items SET status= '{$status}' WHERE id= '{$id}' ";
 	$update=$conn->query($upd);
}else{
	?>
              <script type="text/javascript">
              window.location = "pending_orders.php";
              </script>          
           <?php
}
 ?>
