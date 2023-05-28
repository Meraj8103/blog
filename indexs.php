<?php include "includes/head.php"; ?>
<!-- content -->
<div class="row">
  <div class="col-lg-8 col-md-12 border-lg-end">
  <?php

      $sql="SELECT * FROM post WHERE visibility=1 ORDER BY position ASC";
      $last=$conn->query($sql);
      if($last->num_rows>0){
      $row=$last->fetch_assoc();
        $date=date_create($row['date']);
        $date = date_format($date,"d,F Y");
     ?>
    <div class="card mb-3">
      <a href="<?php echo $base_url.$row['url_slug']; ?>" class="card-link post-1">
        <img data-sizes="auto" data-src="<?php echo $base_url.'image/'.$row['thumbnail']; ?>" class="card-img-top lazyload" alt="<?php echo $row['title']; ?>">
        <div class="card-body b-black p-1">
          <h3 class="card-title fw-bold h3-bird"><?php echo $row['title']; ?></h3>
          <p class="card-text"><small class="post-date">Last updated <?php echo $date; ?><!-- 3 mins ago --></small></p>
        </div>
      </a>
    </div>
  <?php } ?>
<!-- squer post -->
    <div class="row">

      <?php

        $sql="SELECT * FROM post WHERE visibility=1 ORDER BY position Limit 1,4";
        $last=$conn->query($sql);
        while ($row=$last->fetch_assoc()) {
      
       ?>

      <div class="col-md-6 col-12">
        <div class="card mb-3">
          <a href="<?php echo $base_url.$row['url_slug']; ?>" class="card-link post-1">
            <div class="row g-0">
            <div class="col-5 col-md-12 b-black">
            <img data-src="<?php echo $base_url.'image/'.$row['thumbnail']; ?>" class="card-img-top lazyload" alt="<?php echo $row['title']; ?>">
            </div>

              <div class="col-7 col-md-12">
            <div class="card-body more  b-black p-1 ">
              <span class="card-title fw-bold"><h3 class="box-title"><?php echo $row['title']; ?></h3></span>
            </div>
            </div>
              
              </div>
                
          </a>
        </div>
      </div>
<?php } ?>
      
      
    </div>

<!-- squer post end -->
  </div>
<!-- content end -->

<!-- sidebar start -->
  <?php include "includes/sidebar.php"; ?>
<!-- end sidebar -->

<div class="col-12">
      <?php

        $sql="SELECT * FROM post WHERE visibility=1 ORDER BY position Limit 4,8";
        $last=$conn->query($sql);
      if ($last->num_rows>0) {
     
       ?>
<hr>
    <h5 class="text-center m-0">LETEST UPDATE</h5>
<hr>
<div class="row">
  <?php 
        while ($row=$last->fetch_assoc()) {
        $date=date_create($row['date']);
        $date = date_format($date,"d,F Y");
   ?>
  <div class="col-md-6">
        <div class="card mb-3">
          <a href="<?php echo $base_url.$row['url_slug']; ?>" class="card-link post-1">
            <img data-src="<?php echo $base_url.'image/'.$row['thumbnail']; ?>" class="card-img-top lazyload" alt="<?php echo $row['title']; ?>">
            <div class="card-body b-black p-1">
              <span class="card-title fw-bold"><?php echo $row['title']; ?></span>
              <p class="card-text"><small class="post-date">Last updated <?php echo $date; ?></small></p>
            </div>
          </a>
        </div>
  </div>
  <?php 
}
   ?>

</div>
<?php } ?>
</div>

</div>
<!-- end content -->
<?php include "includes/footer.php"; ?>