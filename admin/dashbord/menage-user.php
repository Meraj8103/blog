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
            <th>FULL NAME</th>
            <th>REGISTER DATE</th>
            <th>EMAIL</th>
            <th>MOBILE NO.</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql="SELECT * FROM user " or die("sql faild.");
        $result=$conn->query($sql);
        $serial=1;
        while ($row=$result->fetch_assoc()) {
         ?>

        <tr>
            <td><?php echo $serial; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile_number"]; ?></td>
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
