 	<!-- header -->
<?php  include "includes/header.php";
       include "includes/config.php";
 ?>
<!-- header end -->


<div class="content-wrapper">

 			<h3 align="center">PENDING ORDER</h3>
 			<br>
	<table id="table_id" class="display table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>ORDER ID</th>
            <th>ORDER DATE</th>
            <th>PAYMENT TYPE</th>
            <th>MOBILE NO.</th>
            <th>DELIVERY CHARGE</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql="SELECT * FROM orders INNER JOIN order_items ON order_items.order_id=orders.order_id WHERE order_items.status='Delivered'" or die("sql faild.");
        $result=$conn->query($sql);
        $serial=1;
        while ($row=$result->fetch_assoc()) {
         ?>

        <tr>
            <td><?php echo $serial; ?></td>
            <td><?php echo $row["order_id"]; ?></td>
            <td><?php echo $row["order_date"]; ?></td>
            <td><?php echo $row["payment_type"]; ?></td>
            <td><?php echo $row["user_number"]; ?></td>
            <td><?php echo $row["shipping_charges"]; ?></td>
            <td><a href="view-order.php?id=<?php echo $row['id']; ?>" class="btn-link"><button class="btn-sm btn-danger">View</button></a></td>
        </tr>
    <?php
    $serial++;
     } ?>
        
    </tbody>
    </table>

</div>

<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->
