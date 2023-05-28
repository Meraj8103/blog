
<!-- header -->
<?php  
include "includes/header.php"; 
include "includes/config.php";
?>
<!-- header end -->


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h3 align="center">ADD NEW POST</h3>
    <form action="save-post.php" id="p_form" method="post" enctype="multipart/form-data">

      <br>
      <input type="submit" class="btn btn-primary pd-x-20 mg-t-10 float-right">
      <br><br>
      
      <div class="row row-sm">
        <div class="col-md-6">
          <div class="form-group mg-b-0">
            <label class="form-label">Post Title: <span class="tx-danger">*</span></label>
            <input class="form-control" id="post_title" name="post_title" placeholder="Enter Post title" required="" type="text">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group mg-b-0">
            <label class="form-label">URL Key: <span class="tx-danger">*</span></label>
            <input class="form-control" id="url_key" name="url_key" placeholder="Enter URL Key" required="" type="text">
          </div>
        </div>
      </div>
      
      <br>

      <div class="row row-sm">
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Meta title: <span class="tx-danger">*</span></label>
            <input class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" required="" type="text">
         </div>
       </div>
       <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">Sort Name: <span class="tx-danger">*</span></label>
            <input class="form-control" id="sort_name" name="sort_name" placeholder="Enter Sort Name" required="" type="text">
         </div>
       </div>
   </div>

   <div class="row row-sm">
    <div class="col-md-2">
      <div class="form-group">
        <label class="form-label">Category: <span class="tx-danger">*</span></label>
        <select class="form-control" name="category"  required="">
         <option selected >Select Category</option>
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
        <input class="form-control"  name="position" placeholder="Position" required="" type="number">
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
         <option selected >Select Type</option>
         <option value="Article" >Article</option>
         <option value="NewsArticle" >NewsArticle</option>
         <option value="BlogPosting" >BlogPosting</option>
      </select>
    </div>
  </div> 
   <div class="col-md-2">
      <div class="form-group">
        <label class="form-label">Visibility: <span class="tx-danger">*</span></label>
        <select class="form-control" name="visib" >
         <option selected >Select Type</option>
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

<div class="row row-sm"> 
  <div class="col-12">
    <div class="form-group mg-b-0">
      <label class="form-label"> Meta Description <span class="tx-danger">*</span></label>
      <textarea class="form-control" name="meta_description" rows="4" required="" placeholder="Meta Description"></textarea>
    </div>
  </div>
</div>

<div class="row row-sm"> 
  <div class="col-12">
    <div class="form-group mg-b-0">
      <label class="form-label">Post Editor <span class="tx-danger">*</span></label>
      <textarea class="form-control " id="froala-editor" name="post_editor" rows="10" required="" placeholder="Meta Description"><H1 class="h3">गेमर्स के लिए 5 सबसे बेहतरीन गेमिंग Gadgets</H1>
<small><span class="text-danger">Last Update</span> 26,May 2022</small><br>
    <span class="descrip">5 बेहतरीन गेमिंग गैजेट्स जो आपके स्मार्टफोन के साथ आपकी सभी समस्याओं का समाधान करेंगे जैसे फोन का ज्यादा गर्म होना, एनीमे साउंड प्रॉब्लम, ऑयली स्क्रीन प्रॉब्लम और फ़ोन चार्जिंग में लगा कर खेलने में प्रॉब्लम ताकि आप बिना किसी परेशानी के अपने गेम्स का आनंद ले सकें।</span>
    <hr class="mt-2">
    <br></textarea>
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
    <input type="file" class="dropify" data-height="200" required="" name="image1" />
  </div>
</div>

      <input type="submit" class="btn btn-primary pd-x-20 mg-t-10 ">
</form>
</section>
</div>

<!-- footer -->
<?php include "includes/footer.php"; ?>
<!-- footer end -->


