
<!-- header -->
<?php  
include "includes/header.php"; 
include "includes/config.php";
?>
<!-- header end -->


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h3 align="center">ADD NEW PRODUCTS</h3>
    <?php 
    if (isset($_GET["succes"])) {
      echo "<p class= 'alert-success'>Update succesfull.</p>";
    }elseif (isset($_GET["failed"])) {
      echo "<p class= 'alert-denger'>Update failed.</p>";
    }

    $id=$_GET["id"];
    $sql="SELECT * FROM post WHERE id='{$id}'";
    $result=$conn->query($sql);
    $ros=$result->fetch_assoc();
     ?>
    <form action="save-update.php" id="p_form" method="post" enctype="multipart/form-data">

      
      <br>
      <input type="submit" class="btn btn-primary pd-x-20 mg-t-10 float-right">
      <br><br>
      
      <div class="row row-sm">
        <div class="col-md-6">
          <div class="form-group mg-b-0">
            <label class="form-label">Post Title: <span class="tx-danger">*</span></label>
            <input class="form-control" id="post_title" value="<?php echo $ros['title']; ?>" name="post_title" placeholder="Enter Post title" required="" type="text">
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <input type="hidden" name="oldimage" value="<?php echo $ros['thumbnail']; ?>" >
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group mg-b-0">
            <label class="form-label">URL Key: <span class="tx-danger">*</span></label>
            <input class="form-control" value="<?php echo $ros['url_slug']; ?>" id="url_key" name="url_key" placeholder="Enter URL Key" required="" type="text">
          </div>
        </div>
      </div>
      
      <br>

      <div class="row row-sm">
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Meta title: <span class="tx-danger">*</span></label>
            <input class="form-control" value="<?php echo $ros['meta_title']; ?>" id="meta_title" name="meta_title" placeholder="Enter Meta Title" required="" type="text">
         </div>
       </div>
       <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Sort Name: <span class="tx-danger">*</span></label>
            <input class="form-control" id="sort_name" value="<?php echo $ros['sort_name']; ?>" name="sort_name" placeholder="Enter Sort Name" required="" type="text">
         </div>
       </div>
   </div>

   <div class="row row-sm">
    <div class="col-md-2">
      <div class="form-group">
        <label class="form-label">Category: <span class="tx-danger">*</span></label>
        <select class="form-control" name="category"  required="">
         <option  value="<?php echo $ros['category']; ?>" selected ><?php echo $ros['category']; ?></option>
         <?php 
        $sql1="SELECT * FROM category";
        $result1=$conn->query($sql1);
        while ($row1=$result1->fetch_assoc()) {
          ?>
         <option value="<?php echo $row1["category"]; ?>"><?php echo $row1["category"]; ?></option>
         <?php } ?>
       </select>
     </div>
   </div>
   <div class="col-md-2">
      <div class="form-group">
        <label class="form-label">Position: <span class="tx-danger">*</span></label>
        <input class="form-control" value="<?php echo $ros['position']; ?>"  name="position" placeholder="Position" required="" type="number">
      </div>
   </div>
   <div class="col-md-3">
    <div class="form-group mg-b-0">
      <label class="form-label">Date: <span class="tx-danger">*</span></label>
      <input class="form-control" disabled  name="date" placeholder="Enter Position" required="" type="text" value="<?php echo date("d M,Y"); ?>">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group mg-b-0">
      <label class="form-label">Article Type: <span class="tx-danger">*</span></label>
      <select class="form-control" name="article" >
         <option value="<?php echo $ros['article_type']; ?>" ><?php echo $ros['article_type']; ?></option>
         <option value="Article" >Article</option>
         <option value="NewsArticle" >NewsArticle</option>
         <option value="BlogPosting" >BlogPosting</option>
      </select>
    </div>
  </div> 
  <div class="col-md-2">
    <div class="form-group mg-b-0">
      <label class="form-label">Visibility: <span class="tx-danger">*</span></label>
      <select class="form-control" name="visib" >
         <option value="<?php echo $ros['visibility']; ?>" ><?php if($ros['visibility']){ echo "Public"; }else{ echo "Draft"; } ?></option>
         <option value="0" >Draft</option>
         <option value="1" >Public</option>
      </select>
    </div>
  </div> 
</div>

<br>

<div class="main-content-label mg-b-5">
 Details for SEO
</div>

<div class="row row-sm "> 
  <div class="col-12">
    <div class="form-group mg-b-0">
      <label class="form-label"> Meta Description <span class="tx-danger">*</span></label>
      <textarea class="form-control" name="meta_description" rows="4" required="" placeholder="Meta Description"> <?php echo $ros['meta_desc']; ?></textarea>
    </div>
  </div>
</div>

<div class="row row-sm "> 
  <div class="col-12">
    <div class="form-group mg-b-0">
      <label class="form-label">Post Editor <span class="tx-danger">*</span></label>
      <textarea class="form-control" id="froala-editor" name="post_editor" rows="10" required="" placeholder="Meta Description"> <?php echo $ros['post']; ?></textarea>
    </div>
  </div>
</div>
<br><br>

<div class="main-content-label mg-b-5">
  Post Images
</div>

<p>
  Upload size mazimum 100kb
</p>

<div class="row"> 
  <div class="col-12">
    <input type="file" data-default-file="<?php echo $base_url; ?>image/<?php echo $ros['thumbnail']; ?>" class="dropify" data-height="200"  name="image1" />
  </div>
</div>

      <input type="submit" class="btn btn-primary pd-x-20 mg-t-10 ">
</form>
</section>
</div>

<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->


