<!-- header -->
<?php  include "includes/header.php";
       include "includes/config.php";
 ?>
<!-- header end -->


<div class="content-wrapper">

 			<h3 align="center">ALL VENDOR</h3>
 			<br>
	<table id="table_id" class="display table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Shop Name</th>
            <th>Owner_Name</th>
            <th>Owner_Number</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql="SELECT * FROM vendor";
        $result=$conn->query($sql);
        $serial=1;
        while ($row=$result->fetch_assoc()) {
         ?>

        <tr>
            <td><?php echo $serial; ?></td>
            <td><?php echo $row["shop_name"]; ?></td>
            <td><?php echo $row["vendor_name"]; ?></td>
            <td><?php echo $row["mobile_number"]; ?></td>
            <td><a href="view_vendor.php?id=<?php echo $row['id']; ?>" class="btn-link"><button class="btn-sm btn-light">View</button></a></td>
            <td><a href="vendor.php?id=<?php echo $row['id']; ?>" class="btn-link"><button class="btn-sm btn-danger">Edite</button></a></td>
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
