 <?php
 include "includes/res.php";
 	 	  if(  $_SERVER["REQUEST_METHOD"] == "POST" ){
include "includes/config.php";
                
                 $shop_name = addslashes( htmlspecialchars( $_POST["shopname"] ) );
                 
                 $pan = addslashes( htmlspecialchars( $_POST["pan"] ) );
                 
                 $vendor_name = addslashes( htmlspecialchars( $_POST["ownername"] ) );
                 
                 $shop_location = addslashes( htmlspecialchars( $_POST["location"] ) );
                 
                $date=date("d M,Y");
                 
                 $shop_mobile = addslashes( htmlspecialchars( $_POST["snumber"] ) );
                 
                 $vendor_email = addslashes( htmlspecialchars( $_POST["email"] ) );
                 
                 $mobile_number = addslashes( htmlspecialchars( $_POST["ownernumber"] ) );
                 
                 $vendor_password = addslashes( htmlspecialchars( $_POST["vpassword"] ) );
                 
                 $bank_name = addslashes( htmlspecialchars( $_POST["bankname"] ) ); 
                 
                 $holder_name = addslashes( htmlspecialchars( $_POST["holdername"] ) );
                 
                 $ac_number = addslashes( htmlspecialchars( $_POST["accountnumber"] ) );
                 
                 $ifsce_code = addslashes( htmlspecialchars( $_POST["ifscecode"] ) );

  
        $sql66 = "SELECT mobile_number FROM vendor WHERE mobile_number = '$vendor_mobile_no' ";

        $rows66  = $conn->query($sql66);
         $tr66 = $rows66->num_rows;

     if(  $tr66 == 0 ){







        $id_proof="";

            ///upload image 1st
                       // never assume the upload succeeded
                      if(file_exists($_FILES['idproof']['tmp_name']) || is_uploaded_file($_FILES['idproof']['tmp_name'])) {
                     if ($_FILES['idproof']['error'] !== UPLOAD_ERR_OK) {
                          ///still save the details..
                        
                        die("Upload failed with error code " . $_FILES['idproof']['error']);


                    

                        exit();
                     }

                     $info = getimagesize($_FILES['idproof']['tmp_name']);
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
                      $id_proof = time().rand(1,9999).$_FILES["idproof"]["name"];
                      
                      $tmp_name = $_FILES["idproof"]["tmp_name"];
                      move_uploaded_file($tmp_name, "../uploads/".$id_proof);
                      }
                      else{
                       $id_proof = "";  
                      }
                    ////1st image saved


// image///////////////////////////


                      $dp="";

                    ///upload image 2st
                       // never assume the upload succeeded
                      if(file_exists($_FILES['dp']['tmp_name']) || is_uploaded_file($_FILES['dp']['tmp_name'])) {
                     if ($_FILES['dp']['error'] !== UPLOAD_ERR_OK) {
                          ///still save the details..
                        die("Upload failed with error code " . $_FILES['dp']['error']);


                    

                        exit();
                     }

                     $info = getimagesize($_FILES['dp']['tmp_name']);
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
                      $dp = time().rand(1,9999).$_FILES["dp"]["name"];
                      
                      $tmp_name = $_FILES["dp"]["tmp_name"];
                      move_uploaded_file($tmp_name, "../uploads/".$dp);
                      }
                      else{
                       $dp = "";  
                      }
                    ////2st image saved  


         

           $sqltt =  "INSERT INTO vendor(id, vendor_name, date, profile_photo, mobile_number, id_proof, shop_name, shop_contect, bank_name, holder_name, account_number, shop_address, email, password,ifscecode,pan_card) VALUES ('','$vendor_name','$date','$dp','$mobile_number','$id_proof','$shop_name','$shop_mobile','$bank_name','$holder_name','$ac_number','$shop_address','$vendor_email','$vendor_password','$ifsce_code','$pan')"; 


           if( $conn->query($sqltt) == true  ){
                ?>
                  <script type="text/javascript">
                     window.location = "add-vendor.php?succes";
                  </script>
                <?php 
           }

     }else{
         ?>
           <script type="text/javascript">
                window.location = "add-product.php?fail";
           </script>
         <?php 
     }





 	 	  } 
 	 	 ?>