<?php include "config.php";
$geturl= basename($_SERVER['PHP_SELF']);
$schema_data="";
$meta_keyword="";
switch ($geturl) {
		case 'indexs.php':
		
		$title = "Birdlights Blog";

		$meta_desc="Here you will get to see and read many good reviews, national and international news, sports news, social news, all kinds of information through birdlights.com.";
        $schema_data='<script type="application/ld+json">
        {
        "@type": "WebPage",
        "name": "'.$title.'",
        "description": "'.$meta_desc.'",
        "url": "https://birdlights.com/",
        "@context": "http://schema.org"
        }
        </script>';
		break;

		case 'about-us.php':
		
		$title = "About Birdlights Blog";

		$meta_desc="We have created this site to connect you with us and know about yourself in a different way. In this you have some stories, some information and some dreams that we have seen. So, some are related to reality, some have been experienced from books, and some stories will be found struggling with the condition. We want to be your best friend through this website. Some want to know about you and some about you.";
		$schema_data='<script type="application/ld+json">
        {
        "@type": "WebPage",
        "name": "'.$title.'",
        "description": "'.$meta_desc.'",
        "url": "https://birdlights.com/about-us",
        "@context": "http://schema.org"
        }
        </script>';
		
		break;
		
		case 'privacy-policyss.php':
		
		$title = "Privacy Policy Birdlights Blog";

		$meta_desc="We will try to make your experience better by using these cookies. We do not store any of your personal information. We do not store any data that can identify you, nor do we share any of your data with any third parties.";
	    	
		break;

		case 'contect-us.php':
		
		$title = "Contact Us Birdlights Blog";

		$meta_desc="Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.";
		
		break;

		case 'search.php':
		if (isset($_GET['term'])) {
			$title=$_GET['term'];
		}
		$title = "Search Result For {$title} | Birdlights Blog";
		
		break;

		case 'single-post.php':

	  $catch=$_GET['text'];
  	  $sql="SELECT * FROM post WHERE url_slug='{$catch}'";
      $last=$conn->query($sql);

      if($last->num_rows>0){

      $row=$last->fetch_assoc();
      $title=$row['meta_title'];
	  $meta_desc=$row['meta_desc'];
	  $og_img=$row['thumbnail'];
  	  $meta_keyword=$row['keyword'];

	  }else{
      $sql="SELECT * FROM post INNER JOIN category ON post.category=category.category WHERE category.category='{$catch}'";
      $last=$conn->query($sql);
  		if ($last->num_rows>0) {
  	  $row=$last->fetch_assoc();
  	  $title=$row['category']." | Birdlights Blog";
  	  $meta_desc=$row['category_desc'];
  	  $schema_data='<script type="application/ld+json">
        {
        "@type": "WebPage",
        "name": "'.$title.'",
        "description": "'.$meta_desc.'",
        "url": "https://birdlights.com/'.$row["category"].'",
        "@context": "http://schema.org"
        }
        </script>';
	 	 }else{
	  $title="not found.";
	  $meta_desc="not found";
	 	 }
	 
	  }
		$title = "{$title}";

		$meta_desc="{$meta_desc}";
		
		break;
		
		default:
		$title="Birdlights blog";
		$meta_desc="page not found.";
		

		break;
}





 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $meta_desc; ?>">
	<meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $meta_desc; ?>"/>
	<?php 
	if(!empty($meta_keyword))
	echo '<meta name="keywords" content="'.$meta_keyword.'">';
  if (isset($og_img)) {
   ?>
    <meta property="og:image" content="<?php echo $base_url.'image/'.$og_img; ?>"/>
<?php 
  }
 ?>
	<link rel="icon" href="<?php echo $base_url; ?>favicon.jpg">
    <meta property="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
	<link rel="cannonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/all.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/fontawesome-free-6.0.0-web/css/all.min.css">
	<script type="text/javascript" async src="<?php echo $base_url; ?>assets/lazysizes.min.js"></script>
    <?php echo $schema_data; ?>
</head>
<body>
	<div class="container-2x overflow-hidden">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark p-md-0 p-1" >
		<div class="container-fluid pe-0">
			<a class="navbar-brand" href="/"><img src="<?php echo $base_url; ?>bird-blog.webp" alt="BIRDLIGHTS BLOGS" width="180px"></a>
			<a href="#" class="navbar-toggler border-0 me-2 p-2 text-white ms-auto search-button"><i class="fas fa-search"></i></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-md-auto">
					<li class="nav-item rounded">
						<a class="nav-link active p-md-3 ps-2" aria-current="page" href="<?php echo $base_url; ?>" ><i class="fas fa-home"></i></a>
					</li>
					<?php 
					
					$sql="SELECT DISTINCT category.category as ct FROM category INNER JOIN post ON category.category=post.category Limit 4";
					$last=$conn->query($sql);
					while ($row=$last->fetch_assoc()) {
					 ?>
					<li class="nav-item rounded">
						<a class="nav-link p-md-3 ps-2" href="<?php echo $base_url.$row['ct']; ?>"><?php echo $row['ct']; ?></a>
					</li>
				<?php } ?>
					
					<li class="nav-item dropdown rounded">
						<a class="nav-link dropdown-toggle p-md-3 ps-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
						<ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
							
							<?php

								$sql1="SELECT DISTINCT category.category as ct FROM category INNER JOIN post ON category.category=post.category Limit 4,100";
								$last1=$conn->query($sql1);
								while ($row1=$last1->fetch_assoc()) {
							
							 ?>
							<li><a class="dropdown-item" href="<?php echo $base_url.$row1['category']; ?>"><?php echo $row1['category']; ?></a></li>
							
							<?php
							} ?>

							<li><a class="dropdown-item" href="privacy-policy">Privacy policy</a></li>
							<li><a class="dropdown-item" href="contact-us">Contect Us</a></li>
							<li><a class="dropdown-item" href="about-us">About Us</a></li>
							<!-- <li>
								<hr class="dropdown-divider">
							</li> -->
						</ul>
					</li>
					<li class="nav-item rounded d-none d-md-block">
						<a href="#" click-state='0' class="nav-link p-md-3 ps-2 me-md-1 search-button"><i class="fas fa-search"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<!-- sub category -->
	<nav class="nav bg-success justify-content-center position-relative" style="z-index:1;">
	<?php
	if (isset($_GET['can'])) {
		$condition='subcategory='.$_GET['can'];
	}else{
		$condition=1;
	}
		$sub_cat="SELECT * FROM trending ORDER BY position";
		$sub=$conn->query($sub_cat);
		while ($scat=$sub->fetch_assoc()) {
							 ?>
	  <a class="nav-link sub-cat" href="<?php echo $base_url.$scat['link']; ?>"><?php echo $scat['trend']; ?></a>
	  
	<?php } ?>
	 
	<form class="search-form" action="<?php echo $base_url; ?>search/">
								<div class="input-group p-2 bg-dark">
									<input class="form-control me-1 shadow-none" id="search-input" type="search" placeholder="Search" aria-label="Search" aria-describedby="btn1" name="term">
									<button class="btn search-btn btn-1" type="sumbit" id="btn1"><b>Go</b></button>
								</div>
	</form>
	</nav>
	<div class="row justify-content-center">
	<div class="col-lg-11 col-xl-10 col-12">
	<div class="container pt-2">
	
