<!-- header -->
<?php  include "includes/header.php"; 

       include "includes/config.php"; ?>
<!-- header end -->


<div class="content-wrapper">

 			<h3 align="center">MY ALL POSTS</h3>
 			<br>
	<table id="table_id" class="display table table-light table-hover table-bordered table-responsive">
    <thead>
        <tr>
            <th>No.</th>
            <th>title</th>
            <th>Category</th>
            <th>date</th>
            <th>Image</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $pub=$_SESSION['pub_id'];
        $sql="SELECT * FROM post WHERE publicer=$pub";
        $result=$conn->query($sql);
        while ($row=$result->fetch_assoc()) {
            
         ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["category"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["thumbnail"]; ?></td>
            <td><a data-id="<?php echo $row['id']; ?>" data-title="<?php echo $row["title"] ?>" data-type="update" class="btn-link action-button"><button class="btn-sm btn-light">View</button></a></td>
            <td><a data-id="<?php echo $row['id']; ?>" data-title="<?php echo $row["title"] ?>" data-type="delete" class="btn-link action-button"><button class="btn-sm btn-danger">Delete</button></a></td>
        </tr>
    <?php } ?>
        
    </tbody>
	</table>

</div>
<script>
$(".action-button").click(function(){
        var ids = $(this).data("id");
        var dtype = $(this).data("type");
        var title = $(this).data("title");
    if(confirm("'"+title+"'Are you sure you want to "+dtype+" this artical ?")){
        $(this).attr("href", dtype+"-post.php?id="+ids);
    }
    else{
        return false;
    }
});
</script>
<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->
