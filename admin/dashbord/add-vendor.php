
<!-- header -->
<?php  include "includes/header.php"; ?>
<!-- header end -->


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h3 align="center">ADD NEW VENDOR</h3>


    <form method="post" action="save-vendor.php" enctype="multipart/form-data">
 	 	 	
      <div class="row">
        
        <div class="col-md-6">
          <b>Shop Name</b>
          <input type="text" class="form-control" required="" name="shopname">
        </div>

        <div class="col-md-6">
          <b>PAN/VAT (registration number)</b>
          <input type="text" class="form-control" required="" name="pan">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="col-md-6">
          <b>Upload Vendor Id proof </b>
          <input type="file" class="dropify" data-height="200" required="" name="idproof" >
        </div>

        <div class="col-md-6">
          <b>Vendor Photo</b>
          <input type="file" class="dropify" data-height="200" required="" name="dp">
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="col-md-6">
          <b>Shop Owner Name</b>
          <input type="text" class="form-control" required="" name="ownername">
        </div>

        <div class="col-md-6">
          <b>Location (shop location)</b>
          <input type="text" class="form-control" required="" name="location">
        </div>

        <br>


        <div class="col-md-6">
          <b>Shop Contact No.</b>
          <input type="number" class="form-control" required="" name="snumber">
        </div>

        <br>

        <div class="col-md-6">
          <b>Email Id</b>
          <input type="email" class="form-control" required="" name="email">
        </div>

        <div class="col-md-6">
          <b>Shop Owner Number (To be used in vendor panel login)</b>
          <input type="number" class="form-control" required="" name="ownernumber">
        </div>

        <div class="col-md-6">
          <b>Vendor Password (To be used in vendor panel login)</b>
          <input type="password" class="form-control" required="" name="vpassword">
        </div>
        
        <div class="col-md-12">
        <hr />
        <h4>Bank Detail</h4>
        </div>
        
        <div class="col-md-6">
          <b>Branch/Bank Name</b>
          <input type="text" class="form-control" required="" name="bankname">
        </div>

        <div class="col-md-6">
          <b>Account Holder Name</b>
          <input type="text" class="form-control" required="" name="holdername">
        </div>

        <div class="col-md-6">
          <b>Account number</b>
          <input type="number" class="form-control" required="" name="accountnumber">
        </div>

        <div class="col-md-6">
          <b>IFSCE Code</b>
          <input type="text" class="form-control" required="" name="ifscecode">
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
