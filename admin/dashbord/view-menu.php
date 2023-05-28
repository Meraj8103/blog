<!-- header -->
<?php  include "includes/header.php"; 

       include "includes/config.php"; ?>
<!-- header end -->


<div class="content-wrapper">

 			<h3 align="center">ALL PRODUCTS</h3>
 			<br>
	<table id="table_id" class="display table table-light table-hover table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php 

        $sql="SELECT * FROM category ";
        $result=$conn->query($sql);
        while ($row=$result->fetch_assoc()) {
            
         ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["category"]; ?></td>
            <td><?php echo $row["category_desc"]; ?></td>
        </tr>
    <?php } ?>
        
    </tbody>
	</table>

</div>

<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->
