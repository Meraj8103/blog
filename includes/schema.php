<?php

if(isset($_GET['text'])){

$urlss=$_GET['text'];

$sql="SELECT * FROM post where url_slug='{$urlss}'";

$result=$conn->query($sql);

$row=$result->fetch_assoc();

if(!empty($row['article_type'])){
    
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "<?php echo $row['article_type']; ?>",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://birdlights.com/<?php echo $row['url_slug']; ?>"
  },
  "headline": "<?php echo $row['meta_title']; ?>",
  "description": "<?php echo $row['meta_desc']; ?>",
  "image": [
    "https://birdlights.com/image/<?php echo $row['thumbnail']; ?>"
  ],  
  "author": {
    "@type": "Person",
    "name": "Meraj Alam"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Birdlights",
    "logo": {
      "@type": "ImageObject",
      "url": "https://birdlights.com/bird-blog.webp"
    }
  },
  "datePublished": "<?php echo substr($row['pub_date'],0,10); ?>",
  "dateModified": "<?php echo substr($row['date'],0,10); ?>"
}
</script>

<?php
}
}
?>


