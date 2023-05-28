<!-- header -->
<?php  include "includes/header.php"; ?>
<!-- header end -->
<div class="container">
        <h3 align="center">ADD NEW USERS</h3>
  <br>
  <form action="" id="p_form" method="post" enctype="multipart/form-data">
  	
  	<input type="hidden" id="product_id" name="product_id" value="<?php echo $product_id; ?>" readonly="">
          <div class="row row-sm">
            <div class="col-6">
              <div class="form-group mg-b-0">
                <label class="form-label">USERNAME: <span class="tx-danger">*</span></label>
                <input class="form-control" id="product_name" name="product_name" placeholder="Enter Usarname" required="" type="text">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group mg-b-0">
                <label class="form-label">passaward: <span class="tx-danger">*</span></label>
                <input class="form-control" id="passaward" name="url_key" placeholder="Enter passaward" required="" type="pass">
              </div>
            </div>
            </div>
</form>
</div>