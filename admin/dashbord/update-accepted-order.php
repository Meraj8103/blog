<?php 
include "includes/res.php";
include "includes/config.php";

if (isset($_GET['otw'])) {
	$id=$_GET["otw"];

	$status="On the way";
	
	$upd="UPDATE order_items SET status = '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>accepted.php";
              </script>          
           <?php
 	}

}elseif (isset($_GET['pend'])) {
	$id=$_GET["pend"];
	$status="pending";
	$upd="UPDATE order_items SET status= '{$status}' WHERE id= '{$id}' ";
 	if ($conn->query($upd)) {
 		?>
              <script type="text/javascript">
              window.location = "<?php echo $base_url ?>accepted.php";
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
