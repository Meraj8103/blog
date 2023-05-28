
<!-- header -->
<?php
  include "includes/header.php";
       include "includes/config.php";
      $error=1; 
      if(  $_SERVER["REQUEST_METHOD"] == "POST" ){ 

                      $category=$_POST['category'];
                      $description=$_POST['description'];


      $sql2="INSERT INTO category (category,category_desc) VALUES ('$category','$description')";  
      $result2=$conn->query($sql2);
      $error=0;
      }
   ?>
<!-- header end -->


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h3 align="center">ADD NEW CATEGORY</h3>
    <?php   if ($error==0) {
      echo "<p class= 'alert-success'>insert succesfull.</p>";
    }
     ?>

    <form method="post">
 	 	 	
      <div class="row">
        <div class="col-md-6">
          <b>Category name</b>
          <input type="text" class="form-control" required="" name="category">
        </div>

        <div class="col-md-6">
          <b>*Category Description</b>
          <input type="text" class="form-control" required="" name="description">
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
