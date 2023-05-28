<?php include "includes/head.php"; ?>
<!-- content -->
<div class="row">
<!-- content end -->
  <div class="col-lg-8 col-md-12 border-lg-end">

  	<?php 
  	$catch=$_GET['text'];
  	  $sql="SELECT * FROM post WHERE url_slug='{$catch}'";
      $last=$conn->query($sql);

      if($last->num_rows>0){
      $row=$last->fetch_assoc();
  	 ?>

  <!-- directry -->
	<div class="row">
		<nav aria-label="breadcrumb" class="p-0">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
		    <li class="breadcrumb-item"><a href="<?php echo $base_url.$row['category']; ?>"><?php echo $row['category']; ?></a></li>
		    <li class="breadcrumb-item active" aria-current="page"><?php echo $row['sort_name']; ?></li>
		  </ol>
		</nav>
	</div>
<!-- directry end -->
<div class="row">
	<?php echo $row['post']; ?>
</div>
<?php }else{
      
      $limit=5;
      if (isset($_GET['page'])) {
      $ofset=(intval($_GET['page'])-1)*$limit;
      }else{
      $ofset=0;
      }

      $sql="SELECT * FROM post WHERE category='{$catch}' ORDER BY id LIMIT $ofset,$limit";
      $last=$conn->query($sql);
  if ($last->num_rows>0) {
?>

  <!-- directry -->
  <div class="row">
    <nav aria-label="breadcrumb" class="p-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $catch; ?></li>
      </ol>
    </nav>
  </div>
<!-- directry end -->
<div class="row">
  <?php 
      while ($row=$last->fetch_assoc()) {
        
        $date=date_create($row['date']);
        $date = date_format($date,"d,F Y");
   ?>
    <div class="col-12">
    <div class="card mb-3">
      <a href="<?php echo $base_url.$row['url_slug']; ?>" class="card-link post-1">
        <img src="<?php echo $base_url.'image/'.$row['thumbnail']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
        <div class="card-body b-black p-1">
          <h3 class="card-title fw-bold h3-bird h3-md"><?php echo $row['title']; ?></h3>
          <p class="card-text text-white p-md"><?php echo substr($row['meta_desc'],50); ?> ...</p>
          <p class="card-text"><small class="post-date s-md">Last updated <?php echo $date; ?><!-- 3 mins ago --></small></p>
        </div>
      </a>
    </div>
    </div>
  <?php } 
      $pagination="SELECT * FROM post WHERE category='{$catch}'";
      $page_last=$conn->query($pagination);
      $no_of_page=$page_last->num_rows/5;
      $no_of_page=ceil($no_of_page);
  ?>
  <hr>
    <nav aria-label="...">
      <ul class="pagination justify-content-center gap-1">

        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>

</div>
<?php    
  }else{
 ?> 
 <div class="row h-100 align-content-center">
   <p class="text-center">Not Found</p>
 </div>
<?php 
  }
  } ?>
  </div>
<!-- sidebar start -->
  <?php include "includes/sidebar.php"; ?>
<!-- end sidebar -->
</div>

<!-- end content -->
<?php include "includes/footer.php"; ?>