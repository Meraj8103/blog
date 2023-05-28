
<!-- header -->
<?php 
       include "includes/header.php"; 
       include "includes/config.php";
      $error=1; 
      if(  $_SERVER["REQUEST_METHOD"] == "POST" ){ 
      $menu_id=$_POST['category'];
      $sub_menu=$_POST['sub_category'];

      $sql2="INSERT INTO sub_menu(menu_id,sub_menu) VALUES ('$menu_id','$sub_menu')";  
      $result2=$conn->query($sql2);
      $error=0;
      }

?>
<!-- header end -->


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h3 align="center">ADD NEW SUBCATEGORY</h3>
    
 <?php   if ($error==0) {
      echo "<p class= 'alert-success'>insert succesfull.</p>";
    }
     ?>

    <form>
 	 	 	
      <div class="row">

        <div class="col-md-6">
          <b>Select Category</b>
          <select class="form-control" name="category">
            <option selected disabled>Select</option>
              <?php 
        $sql="SELECT * FROM menu";
        $result=$conn->query($sql);
        $serial=1;
        while ($row=$result->fetch_assoc()) {
         ?>
            <option value="<?php  echo $row['id'];?>"><?php  echo $row['menu_name'];?></option>
           <?php     } ?>
           </select>
        </div>

        <div class="col-md-6">
          <b>Sub Category Name</b>
          <input type="text" class="form-control" required="" name="sub_category">
        </div>
      </div>

      <br>
 	 	 	<input type="submit" class="btn btn-primary" value="Add" name="">
 	 	 </form>
  </section>
</div>

<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->