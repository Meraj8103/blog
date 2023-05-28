<?php include "includes/head.php"; ?>
<!-- content -->
<div class="row">
	<?php 
	  $term=$_GET['term'];
      $sql="SELECT * FROM post WHERE post LIKE '%{$term}%' and visibility=1 ORDER BY date ASC Limit 0,10";
      $last=$conn->query($sql);
      $no=1;
	 ?>
<!-- content end -->
  <div class="col-lg-8 col-md-12 border-lg-end pt-4">
  	<h2 class="s-font p-2">SEARCH RESULT FOR <?php echo strtoupper($term); ?></h2>
  	<!-- filter -->
  	<div class="row bg-light mx-0 justify-content-center">	
  		<div class="p-3 filter">
  			<h2 class="bg-secondary s-font-1 p-2 m-0 d-flex">FILTER RESULTS <a href="" filter-click-state='0' class="text-decoration-none ms-auto filter-botton" ><h2 class="m-0 s-font-1 show-hide">SHOW <i class="fas fa-caret-down size-caret fa-lg ps-1"></i></h2></a></h2>

  		</div>
  		<div class="row p-3 filter-row">
  			<div class="col-sm-6 filter-by">
  				<h3 class="s-font-1 text-dark">FILTER BY CATEGORY</h3>
  				<a href="<?php echo $base_url; ?>search/?term=<?php echo $term; ?>" class="mt-sm-1 btn btn-outline-danger">ALL</a>
  				<?php 
  									$sql1="SELECT category.category as ct FROM category INNER JOIN post ON category.category=post.category Limit 4";
					$last1=$conn->query($sql1);
					while ($row1=$last1->fetch_assoc()) {
  				 ?>
  				<a href="<?php echo $base_url; ?>search/?term=<?php echo $term.'&cat='.$row1['ct']; ?>" class="mt-sm-1 btn btn-outline-danger"><?php echo $row1['ct']; ?></a>
  			<?php } ?>
  			</div>
  			<div class="col-sm-6 sort-by text-sm-center">
  				<h3 class="s-font-1 text-dark text-start">SORT BY</h3>
  				<a href="<?php echo $base_url; ?>search/?term=<?php echo $term.'&cat=releted'; ?>" class="btn btn-outline-success">MOST RELETED</a>
  				<a href="<?php echo $base_url; ?>search/?term=<?php echo $term.'&cat=newest'; ?>" class="mt-sm-1 btn btn-outline-success">NEWEST FIRST</a>
  			</div>
  		</div>
  	</div>
<!-- filter end -->
	<div class="row my-3">
<?php 
      while ($row=$last->fetch_assoc()) {
 ?>
			
		<div class="search-item">
	<?php if ($no==1) {
	?>	
		<img src="<?php echo $base_url.'image/'.$row['thumbnail']; ?>" class="w-100 pb-2" alt="">
	<?php 
	}
	$no++; 
	 ?>
		<div class="inner-item p-1">
		<a href="<?php echo $base_url.$row['url_slug']; ?>" class="text-link">
		<h3 style="font-size: 18px;"><?php echo $row['title']; ?></h3>
		<p class="m-0 text-secondary"><?php echo $row['description']; ?></p>
		<small style="font-size: 10px;" class="text-dark"><?php echo $row['date']; ?></small>
		</a>
		</div>
		</div>
			
		<hr>
<?php } ?>

		<nav aria-label="...">
		  <ul class="pagination justify-content-center gap-1">
		    <li class="page-item">
		      <a class="page-link" href="#" tabindex="-1">Previous</a>
		    </li>
		    <li class="page-item active"><a class="page-link" href="#">1</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
		    </li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#">Next</a>
		    </li>
		  </ul>
		</nav>
	</div>
  </div>
<!-- sidebar start -->
  <?php include "includes/sidebar.php"; ?>
<!-- end sidebar -->
</div>

<!-- end content -->
<?php include "includes/footer.php"; ?>