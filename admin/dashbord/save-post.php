<?php 
date_default_timezone_set("Asia/Calcutta");
include 'includes/res.php';
include "includes/config.php";
if( $_SERVER["REQUEST_METHOD"] == "POST" ){

                      $post_title  = htmlspecialchars(addslashes($_POST["post_title"]));
                      $sort_name  = htmlspecialchars(addslashes($_POST["sort_name"]));
                     
                    
                      $date  = date(DateTime::ATOM);
                      $pub_date  = date(DateTime::ATOM);
                      
                      $par='<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>';


                      $url_key = $_POST["url_key"];
                      $url_key  = addslashes($url_key);
                      $url_key  = htmlspecialchars($url_key);
                      
                      
                      $article = htmlspecialchars(addslashes($_POST["article"]));




                      $position = $_POST["position"];
                      $position  = addslashes($position);
                      $position  = htmlspecialchars($position);

                      $visib = $_POST["visib"];
                      $visib  = addslashes($visib);
                      $visib  = htmlspecialchars($visib);

                      $pub = $_SESSION["pub_id"];
                      

                      $meta_title = $_POST["meta_title"];
                      $meta_title  = addslashes($meta_title);
                      $meta_title  = htmlspecialchars($meta_title);

                      $meta_description = $_POST["meta_description"];
                      $meta_description  = addslashes($meta_description);
                      $meta_description  = htmlspecialchars($meta_description);
                      $meta_description = $conn->real_escape_string($meta_description);

          
                      
                      $post = str_replace($par,'',$_POST["post_editor"]);
                      $post = mysqli_real_escape_string($conn,$post);

                      $category = $conn->real_escape_string($_POST["category"]);

                  
                     



                      $image1 = "";


                    



                    ///upload image 1st
                       // never assume the upload succeeded
                      if(file_exists($_FILES['image1']['tmp_name']) || is_uploaded_file($_FILES['image1']['tmp_name'])) {
                     if ($_FILES['image1']['error'] !== UPLOAD_ERR_OK) {
                          ///still save the details..
                        
                        die("Upload failed with error code " . $_FILES['image1']['error']);


                    

                        exit();
                     }

                     $info = getimagesize($_FILES['image1']['tmp_name']);
                     if ($info === FALSE) {
                         
                         ///still save the details..
                        die("Unable to determine image type of uploaded file");
                         

                        exit();
                     }

                     if (($info[2] !== IMAGETYPE_WEBP) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_JPG)) {
                         ///still save the details..
                         
                        die("Not a gif/jpeg/png");
                        
                        exit();
                     }
                      $image1 = $_FILES["image1"]["name"];
                      $tmp_name = $_FILES["image1"]["tmp_name"];
                      move_uploaded_file($tmp_name, "../../image/".$image1);
                      }
                      else{
                       $image1 = "";	
                      }
                    ////1st image saved


                   ///save now
                    $sql = "INSERT INTO post (id,url_slug,title,meta_title,sort_name,meta_desc,category,thumbnail,post,date,pub_date,position,article_type,visibility,publicer) VALUES ('','$url_key','$post_title','$meta_title','$sort_name','$meta_description','$category','$image1','$post','$date','$pub_date','$position','$article','$visib','$pub')";
               
                    if ($conn->query($sql)==true) {
                    	
  ?>
  		<script type="text/javascript">
	 	window.location = "add-post.php?succes";
		</script>
 <?php 
                    }else{
?>
  		<script type="text/javascript">
	 	window.location = "add-post.php?failed";
		</script>
 <?php 
                    }

                    
}
 ?>