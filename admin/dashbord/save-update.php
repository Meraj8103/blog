<?php 
date_default_timezone_set("Asia/Calcutta");
include 'includes/res.php';
include "includes/config.php";
if( $_SERVER["REQUEST_METHOD"] == "POST" ){
                      $id= htmlspecialchars(addslashes($_POST["id"]));
                      
                      $post_title  = htmlspecialchars(addslashes($_POST["post_title"]));
                      $sort_name  = htmlspecialchars(addslashes($_POST["sort_name"]));
                     
                    
                      $date  = date(DateTime::ATOM);
                      
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
                      
                      $pub=$_SESSION['pub_id'];
                     
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
                    

                      $oldimage = $conn->real_escape_string($_POST["oldimage"]);


                    ///upload image 1st
                       // never assume the upload succeeded

                     if (empty($_FILES['image1']['name'])) {
                       $image1 = $oldimage;
                     }elseif($_FILES['image1']['name']==$oldimage){
                        $image1=$oldimage;
                     }else{
                        unlink('../../image/'.$oldimage);

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

                     if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
                         ///still save the details..
                         
                        die("Not a gif/jpeg/png");
                        
                        exit();
                     }
                      $image1 = time().rand(1,9999).$_FILES["image1"]["name"];
                      $tmp_name = $_FILES["image1"]["tmp_name"];
                      move_uploaded_file($tmp_name, "../../image/".$image1);
                      }
                      else{
                       $image1 = "";	
                      }
                    }
                    ////1st image saved

                   ///save now
                   $chp="SELECT * FROM post WHERE id='{$id}' and publicer='{$pub}'";
                   $resp = $conn->query($chp);
                   if(!$resp->num_rows){
                      echo "<p>over smart mat ban chal back kr</p>";
                      die();
                   }
                   $sql="UPDATE post SET url_slug='{$url_key}',title='{$post_title}',meta_title='{$meta_title}',sort_name='{$sort_name}',meta_desc='{$meta_description}',category='{$category}',thumbnail='{$image1}',post='{$post}',date='{$date}',position='{$position}',article_type='{$article}',visibility='{$visib}',publicer='{$pub}' WHERE id = '{$id}'";

                    if ($conn->query($sql)==true) {
                  
  ?>
  		<script type="text/javascript">
	 	window.location = "update-post.php?id=<?php echo $id; ?>/&succes";
		</script>
 <?php 
                    }else{
?>
  		<script type="text/javascript">
	 	window.location = "update-post.php?id=<?php echo $id; ?>/&failed";
		</script>
 <?php 
                    }

                    
}
 ?>